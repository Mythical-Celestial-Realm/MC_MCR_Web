<?php
// 预设账号密码
$admins = [
    'Chen' => 'aa011211',
    'WDCSDW' => '**dx',
    'root'   => 'mcr2025'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if (isset($admins[$username]) && $admins[$username] === $password) {
        $_SESSION['admin_user'] = $username;
        header('Location: server.php');
        exit;
    } else {
        $login_error = '账号或密码错误';
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['admin_user']);
    header('Location: server.php');
    exit;
}
