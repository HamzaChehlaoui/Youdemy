<?php
// session_start();
// require_once 'config.php'; // Assume this contains database connection details

// Check if user is logged in and is a student
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
//     header('Location: login.php');
//     exit();
// }

// Database connection
// try {
//     $pdo = new PDO(
//         "mysql:host=" . 'localhost' . ";dbname=" . 'youdemy',
//         'root',
//         '',
//         [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
//     );
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }

// // Function to get student's courses based on status
// function getStudentCourses($pdo, $studentId, $status = null) {
//     $query = "
//         SELECT 
//             c.id_courses,
//             c.title,
//             c.content_url,
//             e.status as enrollment_status,
//             e.enrollment_date,
//             cat.name as category_name,
//             u.username as teacher_name
//         FROM enrollments e
//         JOIN courses c ON e.course_id = c.id_courses
//         JOIN categories cat ON c.category_id = cat.id_categories
//         JOIN users u ON c.teacher_id = u.id_user
//         WHERE e.student_id = :student_id
//     ";
    
//     if ($status) {
//         $query .= " AND e.status = :status";
//     }
    
//     $stmt = $pdo->prepare($query);
//     $stmt->bindParam(':student_id', $studentId, PDO::PARAM_INT);
//     if ($status) {
//         $stmt->bindParam(':status', $status, PDO::PARAM_STR);
//     }
    
//     $stmt->execute();
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }

// // Get courses for each status
// $activeCourses = getStudentCourses($pdo, $_SESSION['user_id'], 'active');
// $completedCourses = getStudentCourses($pdo, $_SESSION['user_id'], 'completed');
// $pendingCourses = getStudentCourses($pdo, $_SESSION['user_id'], 'pending');

// // Get active tab
$currentTab = $_GET['tab'] ?? 'active';
require_once('../Model/t.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Mes Cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.php" class="text-2xl font-bold text-white">Youdemy</a>
                    <div class="hidden md:flex space-x-8 ml-10">
                        <a href="index.php" class="text-white hover:text-gray-300 px-3 py-2">Accueil</a>
                        <a href="courses.php" class="text-white hover:text-gray-300 px-3 py-2">Cours</a>
                        <a href="my-courses.php" class="text-white hover:text-gray-300 px-3 py-2">Mes Cours</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <form action="logout.php" method="POST">
                        <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-gradient-to-r from-white to-gray-200 pt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl font-bold text-black mb-4">Mes Cours</h1>
            <p class="text-gray-700">Continuez votre apprentissage</p>
        </div>
    </div>

    <!-- Course Tabs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="border-b border-gray-200 mb-8">
            <nav class="-mb-px flex space-x-8">
                <a href="?tab=active" 
                   class="border-b-2 <?php echo $currentTab === 'active' ? 'border-black' : 'border-transparent'; ?> pb-4 px-1 text-black font-medium">
                    En cours
                </a>
                <a href="?tab=pending" 
                   class="border-b-2 <?php echo $currentTab === 'pending' ? 'border-black' : 'border-transparent'; ?> pb-4 px-1 text-gray-500 hover:text-black">
                    En attente d'approbation
                </a>
                <a href="?tab=completed" 
                   class="border-b-2 <?php echo $currentTab === 'completed' ? 'border-black' : 'border-transparent'; ?> pb-4 px-1 text-gray-500 hover:text-black">
                    Terminés
                </a>
            </nav>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $coursesToDisplay = [];
            switch($currentTab) {
                case 'active':
                    $coursesToDisplay = $activeCourses;
                    break;
                case 'pending':
                    $coursesToDisplay = $pendingCourses;
                    break;
                case 'completed':
                    $coursesToDisplay = $completedCourses;
                    break;
            }

            foreach($coursesToDisplay as $course):
            ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo htmlspecialchars($course['content_url']); ?>" 
                     alt="<?php echo htmlspecialchars($course['title']); ?>" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-black mb-2">
                        <?php echo htmlspecialchars($course['title']); ?>
                    </h3>
                    <?php if($currentTab === 'active'): ?>
                        <div class="flex items-center mb-4">
                            <div class="h-2 bg-gray-200 rounded-full flex-grow">
                                <div class="h-2 bg-black rounded-full" style="width: 60%"></div>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">60%</span>
                        </div>
                        <a href="course.php?id=<?php echo $course['id_courses'];?>"
                           class="block w-full bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 text-center">
                            Continuer le cours
                        </a>
                    <?php elseif($currentTab === 'pending'): ?>
                        <p class="text-gray-600 mb-4">En attente d'approbation</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                Demande envoyée le <?php echo date('d/m/Y', strtotime($course['enrollment_date'])); ?>
                            </span>
                        </div>
                    <?php else: ?>
                        <p class="text-gray-600 mb-4">Cours terminé</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                Terminé le <?php echo date('d/m/Y', strtotime($course['enrollment_date'])); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>