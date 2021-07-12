<?php

//디비 설정
$url="localhost";
$id="test";
$password="1111";
$db="testdb";

$conn = mysqli_connect($url, $id, $password, $db);
$sql="delete from login where id=4";

$sql = "delete from login where id=2";
mysqli_query($conn, $sql);
echo "데이터가 삭제 되었습니다";


mysqli_close($conn);




?>