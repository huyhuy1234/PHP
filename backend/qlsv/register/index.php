<?php require '../layout/header.php' ?>
<h1>Danh sách sinh viên đăng ký môn học</h1>
<a href="create.php" class="btn btn-info">Add</a>
<?php require '../layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên SV</th>
            <th>Mã MH</th>
            <th>Tên MH</th>
            <th>Điểm</th>
            <th colspan="2">Tùy chọn</th>

        </tr>
    </thead>


    <!-- thầy lộc chỉ -->
    <tbody>
        <?php require '../config.php' ?>
        <?php require '../connectDB.php' ?>
        <?php
        $sql = 'SELECT registermrloc.*, student.name AS tensv, subject.name AS tenmh FROM registermrloc 
        JOIN student ON student.id = registermrloc.student_id
        JOIN subject ON subject.id = registermrloc.subject_id';
        if ($search) {
            $sql .= " WHERE student.name LIKE '%$search%' OR subject.name LIKE '%$search%'";
        }
        $result = $conn->query($sql);
        $order = 0;
        if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :

        ?>
        <?php $order++ ?>


        <tr>
            <td><?= $order ?></td>
            <td><?= $row['student_id'] ?></td>
            <td><?= $row['tensv'] ?></td>
            <td><?= $row['subject_id'] ?></td>
            <td><?= $row['tenmh'] ?></td>
            <td><?= $row['score'] ?></td>
            <td><a class="btn btn-warning btn-sm " href="edit.php?id=<?= $row['id'] ?>">Cập nhật điểm</a></td>
            <td>
                <button type="button" href="destroy.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm delete"
                    data-toggle="modal" data-target="#exampleModal">
                    Xóa
                </button>
            </td>




            <!-- <td><a href="edit.html">Cập nhật điểm</a></td>
            <td><a onclick="return confirm('Bạn muốn xóa đăng ký này phải không?')" href="list.html">Xóa</a></td> -->
        </tr>

        <?php endwhile; ?>
        <?php endif ?>
    </tbody>

</table>
<div>
    <span>Số lượng: <?php echo $order ?></span>
</div>
<?php require '../layout/footer.php' ?>