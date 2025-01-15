<?php
require_once "../Model/Database.php";
require_once "../Model/User.php";

$database = new Database();
$db = $database->getConnection();
$teacher = new Teacher($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $response = ['success' => false];

    switch($data['action']) {
        case 'activate':
            $response['success'] = $teacher->updateStatus($data['id'], 'active');
            break;
        case 'suspend':
            $response['success'] = $teacher->updateStatus($data['id'], 'suspended');
            break;
        case 'delete':
            $response['success'] = $teacher->deleteTeacher($data['id']);
            break;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>