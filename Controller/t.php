<?php 
use Connection\database\Database;
require_once('../Controller/Detail_cours.php');
require_once('../Model/Database.php');

session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "Veuillez vous connecter pour vous inscrire à un cours.";
    header('Location: login.php');
    exit();
}

$id = $_SESSION['user_id']; 

if (!$courseId) {
    $_SESSION['error'] = "ID du cours manquant.";
    header('Location: courses.php');
    exit();
}

$db = new Database();
$conn = $db->getConnection();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Check if already enrolled
        $checkStmt = $conn->prepare("SELECT id FROM enrollments WHERE student_id = :student_id AND course_id = :course_id");
        $checkStmt->execute([':student_id' => $id, ':course_id' => $courseId]);
        
        if ($checkStmt->rowCount() > 0) {
            $_SESSION['error'] = "Vous êtes déjà inscrit à ce cours.";
            header('Location: course_details.php?id=' . $courseId);
            exit();
        }

        // Insert new enrollment
        $stmt = $conn->prepare("
            INSERT INTO enrollments (student_id, course_id, status) 
            VALUES (:student_id, :course_id, :status)
        ");

        $stmt->execute([
            ':student_id' => $id,
            ':course_id' => $courseId,
            ':status' => 'active'
        ]);

        $_SESSION['success'] = "Inscription au cours réussie!";
        header('Location:https://youtu.be/6GI89f8TuCc?si=8HKcgkhm9Nj_n0km');
        exit();

    } catch (PDOException $e) {
        $_SESSION['error'] = "Erreur lors de l'inscription au cours: " . $e->getMessage();
        header('Location: course_details.php?id=' . $courseId);
        exit();
    }
}
?>