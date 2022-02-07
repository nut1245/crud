<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'farm');

class DB_con
{
    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;
        if (mysqli_connect_errno()) {
            echo "Failed to connect to My SQL : " . mysqli_connect_errno();
        }
    }

    public function insert($group_name, $group_pic)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO group_project( group_name , group_pic)
        VALUES('$group_name','$group_pic')");
        return $result;
    }

    public function insertkm($km_name, $km_pic, $km_group)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO km_unit( km_name , km_pic , km_group)
        VALUES('$km_name','$km_pic','$km_group')");
        return $result;
    }

    public function fetchdata()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM group_project");
        return $result;
    }

    public function fetchonerecord($id){
        $result = mysqli_query($this->dbcon, "SELECT * FROM group_project WHERE group_id = '$id'");
        return $result;
    }

    public function fetchtworecord($id){
        $result = mysqli_query($this->dbcon, "SELECT * FROM km_unit WHERE km_id = '$id'");
        return $result;
    }

    public function update($group_name, $group_pic , $group_id)
    {
        $result = mysqli_query($this->dbcon, "UPDATE  group_project SET 
        group_name = '$group_name',
        group_pic = '$group_pic'
        WHERE group_id = '$group_id'");
        return $result;
    }

    public function updatekm($km_name, $km_pic , $km_id , $km_group)
    {
        $result = mysqli_query($this->dbcon, "UPDATE  km_unit SET 
        km_name = '$km_name',
        km_pic = '$km_pic',
        km_group = '$km_group'
        WHERE km_id = '$km_id'");
        return $result;
    }

    public function viewmore ($group_id)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM km_unit 
        WHERE km_group = '$group_id'");
        return $result;
    }

    public function delete($id){
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM group_project  WHERE group_id = '$id'");
        return $deleterecord;

    }

    public function deletekm($id){
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM km_unit WHERE km_id = '$id'");
        return $deleterecord;

    }

}

