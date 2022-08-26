<?php
class Register
{
    // khuôn tạo ra đối tượng
    public $id;
    public $student_id;
    public $subject_id;
    public $score;
    public $tensv;
    public $tenmh;


    function __construct($id, $student_id, $subject_id, $score, $student_name, $subject_name)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->subject_id = $subject_id;
        $this->score = $score;
        $this->tensv = $student_name;
        $this->tenmh = $subject_name;
    }
}