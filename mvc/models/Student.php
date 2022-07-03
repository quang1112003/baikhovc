<?php
include "IModel.php";
include "helpers/Connector.php";

class Student implements IModel
{
    protected $_table = "students";
    protected $_primaryKey = "id";

    public $id;
    public $studentName;
    public $dateOfBirth;
    public $address;
    public $email;
    public $phoneNumber;

    function all()
    {
        $conn = Connector::createInstance();
        $sql_txt = "select * from ".$this->_table;
        $result = $conn ->query($sql_txt);
        $list = [];
        while ($row = $result -> fetch_assoc()){
            $s = new Student();
            $s->id = $row["id"];
            $s->studentName = $row["studentName"];
            $s->dateOfBirth = $row["dateOfBirth"];
            $s->address = $row["address"];
            $s->email = $row["email"];
            $s->phoneNumber = $row["phoneNumber"];
            $list[] = $s;
        }
        return $list;
    }

    function save()
    {
        // TODO: Implement save() method.
    }

    function update(array $data, $id)
    {
        $conn = Connector::createInstance();
        $sql_txt = "update students set studentName=?,dateOfBirth=?,address=?,email=?,phoneNumber=? where id=? ";
        $result = $conn ->query($sql_txt);
        $list = [];
        while ($row = $result -> fetch_assoc()){
            $s = new Student();
            $s->id = $row["id"];
            $s->studentName = $row["studentName"];
            $s->dateOfBirth = $row["dateOfBirth"];
            $s->address = $row["address"];
            $s->email = $row["email"];
            $s->phoneNumber = $row["phoneNumber"];
            $list[] = $s;
        }
        return $list;
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function find($id)
    {
        // TODO: Implement find() method.
    }
}