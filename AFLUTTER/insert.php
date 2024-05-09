<?php
//khai bao thong tin
$ser="localhost"; //server
$u="root"; //user
$p=""; //pass
$db="b" //ten database
//tao ket noi csdl
$conn=new mysqli($ser, $u, $p, $db);
//lenh insert
$sql="insert into test_table (Ma, HoTen, SDT) values (44215, 'Bui Binh Duong', '0353948466')";
//thuc hien insert
if ($conn->query($sql)===TRUE) {
    echo "Insert thanh cong !";
}
else {
    echo "Loi: ".$conn->error;
}
//dong ket noi
$conn->close();
?>