<?php
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công";
echo '<br>';
// Lệnh xóa
// 2020-01-05 20:29:15
$sql = "DELETE FROM student WHERE id = 1";
// Thực hiện delete
if ($conn->query($sql)) {
    echo "Delete thành công";
} else {
    echo "Delete thất bại: " . $conn->error;
}


$conn->close();