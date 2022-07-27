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

// * là tất cả các cột. Không ghi điều kiện WHERE là chọn tất cả các dòng
// ASC: Tăng  dần, Desc: giam dần
//$sql = "SELECT * FROM student ORDER BY firstname ASC";

// Phân trang
// Total: 7 dòng
// Hiển thị 3 dòng 1 trang
// => có 3 trang, cách làm: 7/3 và làm tròn lên
// ... LIMIT index_start, item_per_page;
// Trang 1:
//$sql = "SELECT * FROM student LIMIT 0, 3";

// Trang 2:
//$sql = "SELECT * FROM student LIMIT 3, 3";
// công thức: index_start = ($page-1 * 3) * $item_per_page

//LIKE
//$sql = "SELECT * FROM student WHERE lastname LIKE '%n%'";


// JOIN
// xxx AS rename_for_xxx
$sql = "SELECT employee.*, department.name AS dept_name FROM employee JOIN department ON employee.dept_id = department.dept_id;";

//Gởi câu lệnh sql xuống database và yêu database thực thi câu lệnh đó
// result là biến chứa các dòng dữ liệu được trả về từ database
//query: truy vấn, thực thi câu lệnh
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // false: false, 0, "", null
    // $result->fetch_assoc() là lấy 1 dòng trong result bỏ vào biến row
    //biến row là array kết hợp
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }
} else {
    echo "0 results";
}

$conn->close();