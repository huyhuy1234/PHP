<?php

// ROUTER
// Điều hướng đến controller cụ thể dựa vào tham số trên dường dẫn web

// Vì lúc nào web nó cũng sẽ đi qua router nên là mình đặt session_start ở đây
session_start();
//import config
require 'config.php';
require 'connectDB.php';

//import model
require 'model/Student.php';
require 'model/StudentRepository.php';

require 'model/Subject.php';
require 'model/SubjectRepository.php';

require 'model/Register.php';
require 'model/RegisterRepository.php';


$c = $_GET['c'] ?? 'student'; // toán tử ba ngôi. Nếu tk đầu $_GET['c'] không có thì trả về tk sau 'student'
$a = $_GET['a'] ?? 'index';
//ucfirst() là biến chữ đầu tiên thành chữ hoa
$controller = ucfirst($c) . 'Controller'; //StudentController. Viết hoa chữ đầu tiên bằng hàm ucfirst(của cái $c) và nối với Controller
require "controller/$controller.php"; //controller/StudentController.php (nháy đôi mới thay đổi biến bên trong )
$controller = new $controller(); //new StudentController();
$controller->$a(); //$controller->index()