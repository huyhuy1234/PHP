<?php require '../layout/header.php' ?>
<h1>Cập nhật điểm môn học</h1>
<?php
$id = $_GET['id'];
?>
<?php require '../config.php' ?>
<?php require '../connectDB.php' ?>
<?php
$sql = "SELECT registermrloc.*, student.name AS tensv, subject.name AS tenmh FROM registermrloc 
JOIN student ON student.id = registermrloc.student_id
JOIN subject ON subject.id = registermrloc.subject_id WHERE registermrloc.id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Tên sinh viên</label>
                    <span><?= $row['tensv'] ?></span>
                </div>
                <div class="form-group">
                    <label>Tên môn học</label>
                    <span><?= $row['tensv'] ?></span>
                </div>
                <div class="form-group">
                    <label for="score">Điểm</label>
                    <input type="text" name="score" id="score" value="<?= $row['score'] ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require '../layout/footer.php'; ?>