<?php require '../config.php';
require '../connectDB.php';
$student_id = $_POST['student_id'];
$subject_id = $_POST['subject_id'];
//lưu dữ liệu xuống database

$sql = "INSERT INTO registermrloc (student_id, subject_id) VALUES('$student_id','$subject_id')";
session_start();
if ($conn->query($sql)) {
    $_SESSION['huyhuy'] = 'Đã đăng ký môn học cho sinh viên thành công';
    header('location:index.php'); //về lại trang chủ
    exit; //kết thúc chương trình 
}
$_SESSION['error'] = "Error: $sql<br>" . $conn->error;
header('location:index.php');