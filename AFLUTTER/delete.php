<?php
//khai bao thong tin
$ser="localhost"; //server
$u="root"; //user
$p=""; //pass
$db="b" //ten database
//tao ket noi csdl
$conn=new mysqli($ser, $u, $p, $db);
//lenh insert
$sql="delete from test_table where Ma = 44215";
//thuc hien insert
if ($conn->query($sql)===TRUE) {
    echo "Delete thanh cong !";
}
else {
    echo "Loi: ".$conn->error;
}
//dong ket noi
$conn->close();
?>