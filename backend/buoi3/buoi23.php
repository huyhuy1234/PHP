<?php
$a = 5;
echo $a;
echo '<br>';

//phép gán có 2 bước:
// B1: gán giá trị vào biến
// B2: trả về giá trị của phép gán
echo $a = 5;
//c = 9
//b = 9
//a = 9
$a = $b = $c = 9;

$a1 = 5;
$a2 = 7;
if ($a1 = $a2) {
	echo 'haha';
}