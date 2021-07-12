<?php

//디비 설정
$url="localhost";
$id="test";
$password="1111";
$db="testdb"


$uid = $_POST["uid"];
$upass = $_POST["upass"];


// 1. 접속 : mysqli_connect()
$conn = mysqli_connect($url, $id, $password, $db);

// 2. 쿼리 : mysql_query() login 테이블에 사용자가 입력한 아이디와 비밀번호 insert 시키는 쿼리
$sql = "insert into login(userid, userpass) values('$uid', '$upass')";
mysqli_query($conn, $sql);
echo "데이터가 입력되었습니다.";

// 3. mysql 종료 mysqli_close();
mysqli_close($conn);




?>

