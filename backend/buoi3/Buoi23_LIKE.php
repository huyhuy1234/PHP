<?php 
// Create connection
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "study";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công";



$sql = "SELECT id, firstname, lastname, email FROM student WHERE lastname LIKE '%Doe%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       var_dump($row);
    }
} else {
    echo "0 results";
}

$conn->close();
 ?>