<?php
//khai bao thong tin
$ser="localhost"; //server
$u="root"; //user
$p=""; //pass
$db="b" //ten database
//tao ket noi csdl
$conn=new mysqli($ser, $u, $p, $db);
//lenh insert
$sql="update test_table set Ma = 'Ma Moi', HoTen = 'Ho Ten Moi', SDT = 'SDT Moi' where Ma = 44215";
//thuc hien insert
if ($conn->query($sql)===TRUE) {
    echo "Update thanh cong !";
}
else {
    echo "Loi: ".$conn->error;
}
//dong ket noi
$conn->close();
?>