<?php
class RegisterRepository
{
    // kết nối database 
    // Trả về danh sách register ( dạng đối tượng)
    protected function fetch($cond = null)
    {
        global $conn; // bên trong hàm dùng dc biến bên ngoài hàm(mặc định là không)
        $sql = "SELECT registermrloc.*, student.name AS tensv, subject.name AS tenmh FROM registermrloc 
        JOIN student ON student.id = registermrloc.student_id
        JOIN subject ON subject.id = registermrloc.subject_id";
        if ($cond) {
            $sql .= " WHERE $cond";
            // $sql = "SELECT registermrloc.*, student.name AS tensv, subject.name AS tenmh FROM registermrloc 
            // JOIN student ON student.id = registermrloc.student_id
            // JOIN subject ON subject.id = registermrloc.subject_id WHERE $cond ";
        }
        $result = $conn->query($sql);
        $registers = [];
        //[] bên phải dấu bằng là array rỗng
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $student_id = $row['student_id'];
                $subject_id = $row['subject_id'];
                $score = $row['score'];
                $student_name = $row['tensv'];
                $subject_name = $row['tenmh'];

                $register = new Register($id, $student_id, $subject_id, $score, $student_name, $subject_name);

                // Dấu [] bên trái là thêm 1 phần tử vào cuối danh sách
                $registers[] = $register;
            }
        }
        return $registers;
    }

    //Lấy tất cả sinh viên có trong database
    function getAll()
    {
        $registers = $this->fetch();
        return $registers;
    }

    // Lấy sinh viên theo điều kiện
    function getByPattern($search)
    {
        $cond = " student.name LIKE '%$search%' OR subject.name LIKE '%$search%'";
        $registers = $this->fetch($cond);
        return $registers;
    }

    //Lưu sinh viên mới vào database
    function save($data)
    {
        global $conn;
        $student_id = $data['student_id'];
        $subject_id = $data['subject_id'];
        $sql = "INSERT INTO registermrloc (student_id, subject_id) VALUES ('$student_id', '$subject_id')";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $sql . '<br>' . $conn->error;
        return false;
    }


    // Cần trả về 1 đối tượng (không phải array)
    function find($id)
    {
        $cond = "id=$id";
        $registers = $this->fetch($cond);
        // lấy 1 phần tử đầu tiên trong danh sách
        $register = current($registers);
        return $register;
    }

    function update($register)
    {
        global $conn;
        $student_id = $register->student_id;
        $subject_id = $register->subject_id;
        $id = $register->id;
        $sql = "UPDATE registermrloc SET student_id='$student_id', subject_id='$subject_id' WHERE id=$id ";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $sql . '<br>' . $conn->error;
        return false;
    }

    function delete($id)
    {
        global $conn;

        $sql = "DELETE FROM registermrloc WHERE id=$id";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $sql . '<br>' . $conn->error;
        return false;
    }
}