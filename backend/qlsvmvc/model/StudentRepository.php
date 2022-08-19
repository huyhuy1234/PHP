<?php
class StudentRepository
{
    // kết nối database 
    // Trả về danh sách student ( dạng đối tượng)
    protected function fetch($cond = null)
    {
        global $conn; // bên trong hàm dùng dc biến bên ngoài hàm(mặc định là không)
        $sql = "SELECT * FROM student";
        if ($cond) {
            //$sql .= " WHERE $cond";
            $sql = "SELECT * FROM student WHERE $cond ";
        }
        $result = $conn->query($sql);
        $students = [];
        //[] bên phải dấu bằng là array rỗng
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row['name'];
                $birthday = $row['birthday'];
                $gender = $row['gender'];
                $student = new Student($id, $name, $birthday, $gender);

                // Dấu [] bên trái là thêm 1 phần tử vào cuối danh sách
                $students[] = $student;
            }
        }
        return $students;
    }

    //Lấy tất cả sinh viên có trong database
    function getAll()
    {
        $students = $this->fetch();
        return $students;
    }

    // Lấy sinh viên theo điều kiện
    function getByPattern($search)
    {
        $cond = "name LIKE '%$search%'";
        $students = $this->fetch($cond);
        return $students;
    }

    //Lưu sinh viên mới vào database
    function save($data)
    {
        global $conn;
        $name = $data['name'];
        $birthday = $data['birthday'];
        $gender = $data['gender'];
        $sql = "INSERT INTO student (name, birthday, gender) VALUES ('$name', '$birthday', '$gender')";
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
        $students = $this->fetch($cond);
        // lấy 1 phần tử đầu tiên trong danh sách
        $student = current($students);
        return $student;
    }

    function update($student)
    {
        global $conn;
        $name = $student->name;
        $birthday = $student->birthday;
        $gender = $student->gender;
        $id = $student->id;
        $sql = "UPDATE student SET name='$name', birthday='$birthday', gender='$gender' WHERE id=$id ";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $sql . '<br>' . $conn->error;
        return false;
    }

    function delete($id)
    {
        global $conn;

        $sql = "DELETE FROM student WHERE id=$id";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $sql . '<br>' . $conn->error;
        return false;
    }
}