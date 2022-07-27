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
mysqli_set_charset($conn, "utf8");
echo "Kết nối thành công";
echo '<br>';
// Lệnh update
$sql = "UPDATE student SET email='t@gmail.com', firstname='Khùng' WHERE id=1";
// Thực hiện update
if ($conn->query($sql)) {
    echo "update thành công";
} else {
    echo "Update thất bại: $sql " . $conn->error;
}
$conn->close();