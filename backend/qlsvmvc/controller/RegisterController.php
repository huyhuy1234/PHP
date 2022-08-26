<?php
class RegisterController
{
    function index()
    {
        $search = $_GET['search'] ?? '';

        $registerRepository = new RegisterRepository();
        if ($search) {
            $registers = $registerRepository->getByPattern($search);
        } else {
            $registers = $registerRepository->getAll();
        }

        require 'view/register/index.php';
    }

    function store()
    {
        $registerRepository = new RegisterRepository();
        if ($registerRepository->save($_POST)) {
            $_SESSION['success'] = 'Đã tạo môn học thành công';
            header('location:/?c=register');
            exit;
        }
        $_SESSION['error'] = $registerRepository->error;
        header('location:/?c=register');
    }



    function edit()
    {
        $id = $_GET['id'];
        $registerRepository = new RegisterRepository();
        $register = $registerRepository->find($id);
        //var_dump($register);
        require 'view/register/edit.php';
    }

    function create()
    {
        require 'view/register/create.php';
    }

    function destroy()
    {
        $id = $_GET['id'];
        $registerRepository = new RegisterRepository();
        if ($registerRepository->delete($id)) {
            $_SESSION['success'] = 'Đã xóa môn học thành công';
            header('location:/?c=register');
            exit;
        }
        $_SESSION['error'] = $registerRepository->error;
        header('location:/?c=register');
    }

    function update()
    {
        $id = $_POST['id'];
        $student_id = $_POST['student_id'];
        $subject_id = $_POST['subject_id'];


        $registerRepository = new RegisterRepository();
        // dữ liệu cũ trong database
        $register = $registerRepository->find($id);
        //cập nhật đối tượng
        $register->student_id = $student_id;
        $register->subject_id = $subject_id;

        // lưu đối tượng trong database
        $registerRepository = new RegisterRepository();
        if ($registerRepository->update($register)) {
            $_SESSION['success'] = 'Đã cập nhật môn học thành công';
            header('location:/?c=register');
            exit;
        }
        $_SESSION['error'] = $registerRepository->error;
        header('location:/?c=register');
    }

    function huy()
    {
        echo 'Huy cực kì đẹp trai và dễ thương!!!!!! ♥';
    }
}