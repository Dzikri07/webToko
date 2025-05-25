<?php
ini_set('display_errors', 0);
header('Content-Type: application/json');
session_start();

require_once __DIR__ . '/../model/auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
    exit;
}

$auth   = new Auth();
$email  = $_POST['email']    ?? '';
$pass   = $_POST['password'] ?? '';

try {
    $userId = $auth->login($email, $pass);
    if ($userId) {
        $user = $auth->getUserById($userId);

        // simpan level dan email di session
        $_SESSION['level'] = $user['level'];
        $_SESSION['email'] = $user['email'];

        echo json_encode([
            'success'     => true,
            'redirect_to' => ($user['level'] == 0)
                                ? 'dashboard.php'
                                : '../index.php'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Email atau password salah.'
        ]);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Server error.'
    ]);
}
// jangan tutup PHP tag
