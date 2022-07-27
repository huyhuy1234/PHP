<?php require '../layout/header.php' ?>
<h1>Danh sách sinh viên</h1>
<a href="create.php" class="btn btn-info">Add</a>
<?php require '../layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th colspan="2">Tùy Chọn</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        <?php require '../config.php' ?>
        <?php require '../connectDB.php' ?>
        <?php
        $sql = 'SELECT * FROM student';
        if (isset($search)) {
            $sql .= " WHERE name LIKE '%$search%'";
        }
        $result = $conn->query($sql);
        $order = 0;
        if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :
        ?>
        <?php $order++ ?>
        <tr>
            <td><?php echo $order ?></td>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['birthday'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><a class="btn btn-warning btn-sm" href="edit.php?id=<?= $row['id'] ?>">Sửa</a></td>
            <td>
                <button type="button" href="destroy.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm delete"
                    data-toggle="modal" data-target="#exampleModal">
                    Xóa
                </button>
            </td>
        </tr>
        <?php endwhile; ?>
        <?php endif ?>


    </tbody>
</table>
<div>
    <span>Số lượng: <?php echo $order ?></span>
</div>
<?php require '../layout/footer.php' ?>