<?php 
use Connection\database\Database;
use Coursemanager\CourseManager;
require_once('../Model/CourseManager.php');
require_once('../Model/Database.php');
session_start();

try {
    $database = new Database();
    $db = $database->getConnection();
    $categories = $db->query("SELECT id_categories, name FROM categories")->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $_SESSION['error'] = "Erreur de connexion à la base de données: " . $e->getMessage();
    error_log("Database connection error: " . $e->getMessage());
    $categories = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['title']) || empty($_POST['description']) || 
        empty($_POST['content_type']) || empty($_POST['content']) || 
        empty($_POST['category'])) {
        $_SESSION['error'] = "Tous les champs obligatoires doivent être remplis.";
        header('Location: add_cours_teacher.php');
        exit;
    }
    
    try {
        $courseManager = new CourseManager($db);

        $courseData = [
            'title' => trim($_POST['title']),
            'description' => trim($_POST['description']),
            'content_type' => $_POST['content_type'],
            'content' => trim($_POST['content']),
            'category' => $_POST['category'],
            'tags' => isset($_POST['tags']) ? trim($_POST['tags']) : '',
            'teacher_id' => $_SESSION['user_id']
        ];
        
        $result = $courseManager->addCourse($courseData);
        
        if ($result) {
            $_SESSION['success'] = "Le cours a été créé avec succès.";
            header('Location: Course_Management_teacher.php');
            exit;
        } else {
            throw new Exception("Erreur lors de la création du cours.");
        }
        
    } catch (Exception $e) {
        error_log("Course creation error: " . $e->getMessage());
        $_SESSION['error'] = "Une erreur est survenue: " . $e->getMessage();
        header('Location: add_cours_teacher.php');
        exit;
    }
}

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}
?>