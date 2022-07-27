<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Danh sách sinh viên</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "study";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }
                mysqli_set_charset($conn, "utf8");
                $sql = "SELECT * FROM student";
                $result = $conn->query($sql);
                $order = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>
                <?php $order++; ?>

                <tr>
                    <td><?php echo $order ?></td>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                </tr>

                <?php }
                } ?>

            </tbody>
        </table>
    </div>
</body>

</html>