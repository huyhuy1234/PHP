<?php
//var a1= 5; //js 
$a1 = 5;
echo $a1; //hiển thị giá trị của biến $a1 ở server

echo '<br>';


//const PI = 3,14 //js
//Hằng không có dấu $
define('PI', 3.14);
echo PI;
//var_dump([4, 5]);


// kiểu dữ liệu chuỗi
$b = 'Hello';
$c = 'con c';


//cách 1
$str = $b . ' ' .  $c; // . là nối chuỗi trong php
echo '<br>';
echo $str;
echo '<br>';
//cách 2
$str2 = "$b $c";
echo $str2;
$str3 = '$b dfdfdfdfdf$c';
echo $str3;

//Khi nào dấu ' ', khi nào dấu " "
//Phân biệt
// '' chạy nhanh hơn " ", vì "" phải xử lý hàm bên trong
// '' khứa này thì có sao chạy như vậy không có xử lý

//Hiển thị dữ liệu trên server
$arr1 = [5, true, 'haha', 100];
var_dump($arr1);