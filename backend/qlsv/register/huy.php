<!-- huy tự làm -->
<!-- <tbody>
    <?php require '../config.php' ?>
        <?php require '../connectDB.php' ?>
        <?php
        $sql = "SELECT s.id masv, s.`name` tensv, sb.id mamh, sb.`name` tenmh, r.point
        FROM register r, student s, `subject` sb
        WHERE r.id_sv = s.id AND r.id_mh = sb.id";
        $result = $conn->query($sql);
        $order = 0;
        if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :
        ?>
        <?php $order++ ?>
        <tr>
            <td><?php echo $order ?></td>
            <td><?php echo $row['masv'] ?></td>
            <td><?php echo $row['tensv'] ?></td>
            <td><?php echo $row['mamh'] ?></td>
            <td><?php echo $row['tenmh'] ?></td>
            <td><?php echo $row['point'] ?></td>
            <td><a href="edit.html">Cập nhật điểm</a></td>
            <td><a onclick="return confirm('Bạn muốn xóa đăng ký này phải không?')" href="list.html">Xóa</a></td>
        </tr>



        <?php endwhile; ?>
        <?php endif ?>
    </tbody> -->