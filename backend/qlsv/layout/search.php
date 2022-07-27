<?php
//$search = isset($_GET['search']) ? $_GET['search'] : '';
//toán tử 3 ngôi rút gọn
$search = $_GET['search'] ?? '';
// Nếu $_GET['search'] mà có thì trả lại $_GET['search'] còn không thì trả về ''
?>
<form action="index.php" method="GET">
    <label class="form-inline justify-content-end">Tìm kiếm: <input type="search" name="search" class="form-control"
            value="<?php echo $search  ?>">
        <button class="btn btn-danger">Tìm</button>
    </label>
</form>