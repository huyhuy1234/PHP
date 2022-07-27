<?php
require '../config.php';
require '../connectDB.php';
$score = $_POST['score'];
$id = $_POST['id'];

$sql = "UPDATE registermrloc SET score='$score' WHERE id=$id";
session_start();
if ($conn->query($sql)) {
    $_SESSION['huyhuy'] = 'Đã cập nhật điểm thành công';
    header('location:index.php'); //về lại trang chủ
    exit; //kết thúc chương trình 
}
$_SESSION['error'] = "Error: $sql<br>" . $conn->error;
header('location:index.php');