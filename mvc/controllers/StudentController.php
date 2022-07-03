<?php

include "models/Student.php";

class StudentController
{
    public function getStudents(){
        $studentObj = new Student();
        $list = $studentObj->all();
        include_once "views/student-list.php";
    }
    public function addStudent(){
        include_once "views/addStudent.php";
    }

    public function postStudent(){
        $conn = Connector::createInstance();
        $sql_txt = "insert into students(studentName,dateOfBirth,address,email,phoneNumber) values (?,?,?,?,?);";
        $stt = $conn->createStatement($sql_txt);
//set params and execute
        $name = $_POST["studentName"];
        $birth = $_POST["dateOfBirth"];
        $address = $_POST["Address"];
        $email = $_POST["EmailAddress"];
        $phone = $_POST["phoneNumber"];
        $stt->bind_param("sssss",$name,$birth,$address,$email,$phone);
        $stt->execute();

        header("Location: ?page=student_list");
    }
    public function editStudent(){
        $conn = Connector::createInstance();
        $id = $_GET['id'];
        $sql_txt = "update students set studentName=?,dateOfBirth=?,address=?,email=?,phoneNumber=? where id=?";
        $stt = $conn->createStatement($sql_txt);
//set params and execute
        $name = $_POST["studentName"];
        $birth = $_POST["dateOfBirth"];
        $address = $_POST["Address"];
        $email = $_POST["EmailAddress"];
        $phone = $_POST["phoneNumber"];
        $sid = $id;
        $stt->bind_param("sssssi",$name,$birth,$address,$email,$phone,$sid);
        $stt->execute();

        header("Location: ?page=edit_student");
    }
}