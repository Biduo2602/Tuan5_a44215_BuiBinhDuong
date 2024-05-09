<?php
//cho phep truy cap full du lieu
header('Access-Control-Allow-Origin: *');
//khai bao user, pass
$host="localhost";
$u="root";
$p="";
$db="id22116301_hungnq2808";
//thuc hien ket noi 
$con=new mysqli($host,$u,$p,$db);
//kiem tra tham so truyen
if(isset($_POST['id'])&&
    isset($_POST['firstname'])&&
    isset($_POST['lastname'])&&
    isset($_POST['email']))
    {
        //nhan gia tri tu tham so truyen
        $id = $_POST['id']; $firstname = $_POST['firstname']; $lastname = $_POST['lastname']; $email = $_POST['email']
        //insert
        $sql="insert into mytable values ('$id','$firstname','$lastname','$email')";
        //thuc thi truy van
        $result=$con->query($sql);
        //doc ket qua
        if($result==true)
        {
            echo "them thanh cong"; //in ra ket qua
        }
    }
$con->close();