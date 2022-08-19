<?php
class StudentController
{
    function index()
    {
        $search = $_GET['search'] ?? '';

        $studentRepository = new StudentRepository();
        if ($search) {
            $students = $studentRepository->getByPattern($search);
        } else {
            $students = $studentRepository->getAll();
        }

        require 'view/student/index.php';
    }

    function store()
    {
        $studentRepository = new StudentRepository();
        if ($studentRepository->save($_POST)) {
            $_SESSION['success'] = 'Đã tạo sinh viên thành công';
            header('location:/');
            exit;
        }
        $_SESSION['error'] = $studentRepository->error;
        header('location:/');
    }



    function edit()
    {
        $id = $_GET['id'];
        $studentRepository = new StudentRepository();
        $student = $studentRepository->find($id);
        //var_dump($student);
        require 'view/student/edit.php';
    }

    function create()
    {
        require 'view/student/create.php';
    }

    function destroy()
    {
        $id = $_GET['id'];
        $studentRepository = new StudentRepository();
        if ($studentRepository->delete($id)) {
            $_SESSION['success'] = 'Đã xóa sinh viên thành công';
            header('location:/');
            exit;
        }
        $_SESSION['error'] = $studentRepository->error;
        header('location:/');
    }

    function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];

        $studentRepository = new StudentRepository();
        // dữ liệu cũ trong database
        $student = $studentRepository->find($id);
        //cập nhật đối tượng
        $student->name = $name;
        $student->birthday = $birthday;
        $student->gender = $gender;
        // lưu đối tượng trong database
        $studentRepository = new StudentRepository();
        if ($studentRepository->update($student)) {
            $_SESSION['success'] = 'Đã cập nhật sinh viên thành công';
            header('location:/');
            exit;
        }
        $_SESSION['error'] = $studentRepository->error;
        header('location:/');
    }

    function huy()
    {
        echo 'Huy cực kì đẹp trai và dễ thương!!!!!! ♥';
    }
}