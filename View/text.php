<?php class Course {
    private $conn;
    private $table_name = "courses";

    public $id;
    public $title;
    public $description;
    public $content_type;
    public $content_url;
    public $teacher_id;
    public $category_id;
    public $status;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create new course
    public function create() {
        $query = "INSERT INTO " . $this->table_name . "
                (title, description, content_type, content_url, teacher_id, category_id, status)
                VALUES (:title, :description, :content_type, :content_url, :teacher_id, :category_id, :status)";

        $stmt = $this->conn->prepare($query);

        // Sanitize inputs
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->content_url = htmlspecialchars(strip_tags($this->content_url));

        // Bind parameters
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":content_type", $this->content_type);
        $stmt->bindParam(":content_url", $this->content_url);
        $stmt->bindParam(":teacher_id", $this->teacher_id);
        $stmt->bindParam(":category_id", $this->category_id);
        $stmt->bindParam(":status", $this->status);

        if($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }

    // Update course
    public function update() {
        $query = "UPDATE " . $this->table_name . "
                SET title = :title,
                    description = :description,
                    content_type = :content_type,
                    content_url = :content_url,
                    category_id = :category_id,
                    status = :status
                WHERE id_courses = :id AND teacher_id = :teacher_id";

        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":content_type", $this->content_type);
        $stmt->bindParam(":content_url", $this->content_url);
        $stmt->bindParam(":category_id", $this->category_id);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":teacher_id", $this->teacher_id);

        return $stmt->execute();
    }

    // Delete course
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " 
                WHERE id_courses = :id AND teacher_id = :teacher_id";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":teacher_id", $this->teacher_id);

        return $stmt->execute();
    }

    // Get course statistics
    public function getStatistics() {
        $query = "SELECT 
                    u.username,
                    e.enrollment_date,
                    e.status as enrollment_status,
                    COUNT(DISTINCT e.student_id) as total_students
                FROM " . $this->table_name . " c
                LEFT JOIN enrollments e ON c.id_courses = e.course_id
                LEFT JOIN users u ON e.student_id = u.id_user
                WHERE c.id_courses = :id
                GROUP BY e.student_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Tags management class
class CourseTag {
    private $conn;
    private $table_name = "course_tags";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Add tags to course
    public function addTags($course_id, $tags) {
        $query = "INSERT INTO " . $this->table_name . " (course_id, tag_id) VALUES (:course_id, :tag_id)";
        $stmt = $this->conn->prepare($query);

        foreach($tags as $tag_id) {
            $stmt->bindParam(":course_id", $course_id);
            $stmt->bindParam(":tag_id", $tag_id);
            $stmt->execute();
        }
        return true;
    }

    // Remove tags from course
    public function removeTags($course_id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE course_id = :course_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":course_id", $course_id);
        return $stmt->execute();
    }
}

// Enrollment management class
class Enrollment {
    private $conn;
    private $table_name = "enrollments";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get course enrollments
    public function getCourseEnrollments($course_id) {
        $query = "SELECT 
                    e.*,
                    u.username,
                    u.email
                FROM " . $this->table_name . " e
                JOIN users u ON e.student_id = u.id_user
                WHERE e.course_id = :course_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":course_id", $course_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Update enrollment status
    public function updateStatus($enrollment_id, $status) {
        $query = "UPDATE " . $this->table_name . "
                SET status = :status
                WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":id", $enrollment_id);

        return $stmt->execute();
    }
}