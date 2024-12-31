<?php
include __DIR__.'/../../layouts/header.php';
include __DIR__.'/../../../database/connection.php';


if (!isset($_SESSION['user_id']) || $_SESSION['role_id'] != 1) {
    header("Location: ../../auth/login.php");
    exit();
}


if (!isset($_GET['id'])) {
    header("Location: ../dashboard.php");
    exit();
}

$user_id = (int)$_GET['id'];
$query = "DELETE FROM user WHERE id = $user_id";


header("Location: ../dashboard.php");
exit(); 