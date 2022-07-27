<?php
require '../config.php';
require '../connectDB.php';
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$id = $_POST['id'];

$sql = "UPDATE student SET name='$name', birthday='$birthday', gender='$gender' WHERE id=$id";
session_start();
if ($conn->query($sql)) {
    $_SESSION['huyhuy'] = 'Đã cập nhật sinh viên thành công';
    header('location:/'); //về lại trang chủ
    exit; //kết thúc chương trình 
}
$_SESSION['error'] = "Error: $sql<br>" . $conn->error;
header('location:/');