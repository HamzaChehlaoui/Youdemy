<?php
use Connection\database\Database;
require_once '../Model/Database.php';
require_once 'text.php';


session_start();

// Check if user is logged in and is a teacher
// if(!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
//     header('Location: login.php');
//     exit();
// }

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database();
    $db = $database->getConnection();
    
    $course = new Course($db);
    $courseTag = new CourseTag($db);

    // Set course properties
    $course->title = $_POST['title'];
    $course->description = $_POST['description'];
    $course->content_type = $_POST['content_type'];
    $course->teacher_id = $_SESSION['user_id'];
    $course->category_id = $_POST['category_id'];
    $course->status = 'draft';

    // Handle file upload
    if(isset($_FILES['content'])) {
        $target_dir = "uploads/";
        $file_extension = strtolower(pathinfo($_FILES["content"]["name"], PATHINFO_EXTENSION));
        $new_filename = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;

        if(move_uploaded_file($_FILES["content"]["tmp_name"], $target_file)) {
            $course->content_url = $target_file;
        }
    }

    // Create course
    $course_id = $course->create();
    
    if($course_id) {
        // Add tags if provided
        if(isset($_POST['tags']) && is_array($_POST['tags'])) {
            $courseTag->addTags($course_id, $_POST['tags']);
        }
        
        header('Location: dashboard.php?success=1');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un cours - Youdemy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Ajouter un nouveau cours</h1>
        
        <form action="add_course.php" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Titre du cours</label>
                <input type="text" name="title" required 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" required 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Type de contenu</label>
                <select name="content_type" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="video">Vidéo</option>
                    <option value="document">Document</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Contenu</label>
                <input type="file" name="content" required 
                       class="mt-1 block w-full">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select name="category_id" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <!-- PHP code to populate categories -->
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Tags</label>
                <select name="tags[]" multiple 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <!-- PHP code to populate tags -->
                </select>
            </div>

            <div>
                <button type="submit" 
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-black hover:bg-gray-800">
                    Créer le cours
                </button>
            </div>
        </form>
    </div>
</body>
</html>