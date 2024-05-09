<?php
//khai bao thong tin
$ser="localhost"; //server
$u="root"; //user
$p=""; //pass
$db="b" //ten database
//tao ket noi csdl
$conn=new mysqli($ser, $u, $p, $db);
//lenh select
$sql="select *from test_table";
//thuc hien lenh
$result=$conn->query($sql); //tra ve 1 tap du lieu (dang bang)
while($row[]=$result->fetch_assoc()) {
    //doc tung dong
    $json = json_encode($row); //chuyen thanh json
}
echo '{"test":'.$json.'}';
//dong ket noi
$conn->close();
?>