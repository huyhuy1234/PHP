<?php
require '../config.php';
require '../connectDB.php';

$id = $_GET['id'];
$sql = "DELETE FROM registermrloc WHERE id=$id";
session_start();
if ($conn->query($sql)) {
    $_SESSION['huyhuy'] = 'Đã xóa sinh viên thành công';
    header('location:index.php'); //về lại trang chủ
    exit; //kết thúc chương trình 
}
$_SESSION['error'] = "Error: $sql<br>" . $conn->error;
header('location:index.php');