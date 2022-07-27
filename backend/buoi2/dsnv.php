<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- cdn -->
</head>

<?php
$dsnv = [
    ['code' => 'NV001', 'name' => 'Tý', 'gender' => 'nam', 'department' => 'IT', 'salary' => '1000'],
    ['code' => 'NV002', 'name' => 'Sửu', 'gender' => 'nữ', 'department' => 'HR', 'salary' => '800'],
    ['code' => 'NV003', 'name' => 'Dần', 'gender' => 'nam', 'department' => 'Account', 'salary' => '900']
];
?>

<body>
    <div class="container">
        <h1>Danh sách nhân viện</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Giới Tính</th>
                    <th>Phòng Ban</th>
                    <th>Lương</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $order = 0;
                foreach ($dsnv as $nv) :
                    $order++;
                ?>
                <tr>
                    <td><?= $order ?></td>
                    <td><?= $nv['name'] ?></td>
                    <td><?= $nv['gender'] ?></td>
                    <td><?= $nv['department'] ?></td>
                    <td><?= number_format($nv['salary']) ?>$</td>
                </tr>
                <!-- <tr>
                    <td>2</td>
                    <td>Tuấn Tuấn</td>
                    <td>Nam</td>
                    <td>QC</td>
                    <td>1500$</td>
                </tr> -->
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
</body>

</html>