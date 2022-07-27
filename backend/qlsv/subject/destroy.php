<?php
require '../config.php';
require '../connectDB.php';
session_start();
$id = $_GET['id'];

//Nếu sinh viên dk môn học rồi thì không thể xóa
$sql = "SELECT * FROM registermrloc WHERE subject_id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['error'] = 'Error: Môn học này đã đăng ký môn học, không thể xóa';
    header('location:/');
    exit;
}



$sql = "DELETE FROM subject WHERE id=$id";
session_start();
if ($conn->query($sql)) {
    $_SESSION['huyhuy'] = 'Đã xóa môn học thành công';
    header('location:index.php'); //về lại trang chủ
    exit; //kết thúc chương trình 
}
$_SESSION['error'] = "Error: $sql<br>" . $conn->error;
header('location:index.php');