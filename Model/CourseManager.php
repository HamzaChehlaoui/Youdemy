<?php 
namespace Coursemanager;
use PDO;
class CourseManager {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getCourses($categoryId = null, $tagId = null) {
        $query = "SELECT DISTINCT c.*, 
                    u.username as teacher_name,
                    cat.name as category_name,
                    (SELECT COUNT(*) FROM enrollments WHERE course_id = c.id_courses) as student_count
                 FROM courses c
                 JOIN users u ON c.teacher_id = u.id_user
                 JOIN categories cat ON c.category_id = cat.id_categories
                 LEFT JOIN course_tags ct ON c.id_courses = ct.course_id
                 WHERE 1=1";
        
        $params = [];
        
        if ($categoryId) {
            $query .= " AND c.category_id = :category_id";
            $params[':category_id'] = $categoryId;
        }
        
        if ($tagId) {
            $query .= " AND EXISTS (
                SELECT 1 FROM course_tags ct2 
                WHERE ct2.course_id = c.id_courses 
                AND ct2.tag_id = :tag_id
            )";
            $params[':tag_id'] = $tagId;
        }
        
        $query .= " ORDER BY c.title";
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCourseTags($courseId) {
        $query = "SELECT t.* FROM tags t
                 JOIN course_tags ct ON t.id_tags = ct.tag_id
                 WHERE ct.course_id = :course_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':course_id' => $courseId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteCourse($courseId) {
        $query = "DELETE FROM courses WHERE id_courses = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([':id' => $courseId]);
    }

    public function addCourse(array $courseData) {
        try {
            $this->conn->beginTransaction();
            
            // Validate category exists
            $categoryStmt = $this->conn->prepare("SELECT id_categories FROM categories WHERE id_categories = :category_id");
            $categoryStmt->execute([':category_id' => $courseData['category']]);
            if (!$categoryStmt->fetch()) {
                throw new \Exception("Invalid category selected");
            }
            
            // Insert course
            $courseQuery = "INSERT INTO courses (
                title, 
                description, 
                content_type, 
                content_url, 
                category_id, 
                teacher_id,
                status
            ) VALUES (
                :title,
                :description,
                :content_type,
                :content_url,
                :category_id,
                :teacher_id,
                'draft'
               
            )";
            
            $stmt = $this->conn->prepare($courseQuery);
            $stmt->execute([
                ':title' => $courseData['title'],
                ':description' => $courseData['description'],
                ':content_type' => $courseData['content_type'],
                ':content_url' => $courseData['content'],
                ':category_id' => $courseData['category'],
                ':teacher_id' => $courseData['teacher_id']
            ]);
            
            $courseId = $this->conn->lastInsertId();
            
            // Handle tags if provided
            if (!empty($courseData['tags'])) {
                $tags = array_map('trim', explode(',', $courseData['tags']));
                
                foreach ($tags as $tag) {
                    if (empty($tag)) continue;
                    
                    // First try to find if tag exists
                    $tagQuery = "SELECT id_tags FROM tags WHERE name = :name";
                    $stmt = $this->conn->prepare($tagQuery);
                    $stmt->execute([':name' => $tag]);
                    $existingTag = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                    // If tag doesn't exist, create it
                    if (!$existingTag) {
                        $createTagQuery = "INSERT INTO tags (name) VALUES (:name)";
                        $stmt = $this->conn->prepare($createTagQuery);
                        $stmt->execute([':name' => $tag]);
                        $tagId = $this->conn->lastInsertId();
                    } else {
                        $tagId = $existingTag['id_tags'];
                    }
                    
                    // Check if this course-tag relationship already exists
                    $existingRelationQuery = "SELECT 1 FROM course_tags WHERE course_id = :course_id AND tag_id = :tag_id";
                    $stmt = $this->conn->prepare($existingRelationQuery);
                    $stmt->execute([
                        ':course_id' => $courseId,
                        ':tag_id' => $tagId
                    ]);
                    
                    if (!$stmt->fetch()) {
                        $courseTagQuery = "INSERT INTO course_tags (course_id, tag_id) VALUES (:course_id, :tag_id)";
                        $stmt = $this->conn->prepare($courseTagQuery);
                        $stmt->execute([
                            ':course_id' => $courseId,
                            ':tag_id' => $tagId
                        ]);
                    }
                }
            }
            
            $this->conn->commit();
            return $courseId;
            
        } catch (\PDOException $e) {
            $this->conn->rollBack();
            throw $e;
        }
    }
}

?>