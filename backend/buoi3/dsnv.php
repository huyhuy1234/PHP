<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Danh sách nhân viên</title>
</head>

<body>
    <?php
    $staffList = [
        ['code' => 'NV001', 'name' => 'Tèo em', 'gender' => 'nam', 'salary' => 1000],
        ['code' => 'NV002', 'name' => 'Sửu', 'gender' => 'nữ', 'salary' => 1100]
    ];
    ?>
    <div class="container">
        <h1>Danh sách nhân viên</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Giới tính</th>
                    <th>Lương</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $order = 0;
                foreach ($staffList as $staff) :
                    $order++;
                ?>
                <tr>
                    <td><?= $order ?></td>
                    <td><?= $staff['code'] ?></td>
                    <td><?= $staff['name'] ?></td>
                    <td><?= $staff['gender'] ?></td>
                    <td>$<?= $staff['salary'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


</body>

</html>