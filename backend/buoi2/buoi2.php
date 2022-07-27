<?php
$sql = 'SELECT * FROM student';
$sql .= ' WHERE id=1';
echo $sql; // SELECT * FROM student WHERE id=1


// Mảng thường (numric array)
// Phần tử có 2 phần 
// Trước dấu => là key
// Sau dấu => là giá trị
// Nếu key là số, thì người ta gọi là chỉ số (index)
// Array thường array có key là số

$arr1  = [0 => true, 1 => 'haha', 2 => 9]; // cách viết dài
var_dump($arr1);
$arr2 = [true, 'haha', 9]; //cách viết gọn
var_dump($arr2);


// Mảng kết hợp (associative array)
// Array kết hợp là array mà key của nó là chuỗi
$arr3 = ['toan' => 8, 'ly' => 7.5, 'hoa' => 8.5, 'rank' => 'c'];
var_dump($arr3);
echo $arr3['rank'] . " " . $arr3['toan'];


// Mảng nhiều chiều
$dsnv = [
    ['id' => 'NV001', 'name' => 'Tèo', 'luong' => 1000],
    ['id' => 'NV002', 'name' => 'Téo', 'luong' => 1100],
];
var_dump($dsnv);
echo $dsnv[0]['luong'];




// Vòng lặp
$arr4 = [4, 9, 8, 7, 5, 4, 99];
$size = count($arr4);
$sum = 0;
// for ($i = 0; $i <= $size - 1; $i++) {
//     $sum += $arr4[$i];
// }
foreach ($arr4 as $number) {
    $sum += $number;
}
echo '<br>';
echo $sum;


// foreach
$arr5 = ['toan' => 8, 'ly' => 7, 'hoa' => 10];
$sum1 =  0;
foreach ($arr5 as $mon => $diem) {
    $sum1 += $diem;
}
echo '<br>';
echo $sum1;
echo '<br>';
// vòng lặp while
$arr6 = [18, 5, 0, 20, 7, 92];
$sum2 = 0;
$size = count($arr6);
$i = 0;
while ($i <= $size - 1) {
    $sum2 += $arr6[$i];
    $i++;
}
echo $sum2;