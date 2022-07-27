<?php
session_start();
// Thêm 1 phần tử có key là success và giá trị là "Đã tạo..."
$_SESSION['success'] = 'Đã tạo sinh viên thành công';
var_dump($_SESSION); // có sẳn trên sever