<?php

$url="localhost";
$id="test";
$password="1111";
$db="testdb";

$conn = mysqli_connect($url, $id, $password, $db);

$sql="select * from login";

$result=mysqli_query($conn,$sql);
$re=mysqli_fetch_row($result);
echo "아이디는 : ".$re[1];
echo "비밀번호는 : ".$re[2];
?>