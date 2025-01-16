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
}

?>