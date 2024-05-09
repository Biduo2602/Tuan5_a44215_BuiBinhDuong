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
if(isset($_GET['id'])&&
    isset($_GET['firstname'])&&
    isset($_GET['lastname'])&&
    isset($_GET['email']))
    {
        //nhan gia tri tu tham so truyen
        $id = $_GET['id']; $firstname = $_GET['firstname']; $lastname = $_GET['lastname']; $email = $_GET['email']
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