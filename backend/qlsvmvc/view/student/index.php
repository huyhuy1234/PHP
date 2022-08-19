<?php require 'layout/header.php' ?>
<h1>Danh sách sinh viên</h1>
<a href="?a=create" class="btn btn-info">Add</a>
<?php require 'layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $order = 0 ?>
        <?php foreach ($students as $student) : ?>
        <?php $order++ ?>
        <tr>
            <td><?php echo $order ?></td>
            <td><?php echo $student->id ?></td>
            <td><?php echo $student->name ?></td>
            <td><?php echo $student->birthday ?></td>
            <td><?php echo $student->gender ?></td>
            <td><a class="btn btn-warning btn-sm " href="?a=edit&id=<?= $student->id ?>">Sửa</a></td>
            <td>
                <button type="button" href="?a=destroy&id=<?= $student->id ?>" class="btn btn-danger btn-sm delete"
                    data-toggle="modal" data-target="#exampleModal">
                    Xóa
                </button>
            </td>
        </tr>
        <?php endforeach ?>

    </tbody>
</table>
<div>
    <span>Số lượng: <?php echo $order ?></span>
</div>
<?php require 'layout/footer.php' ?>