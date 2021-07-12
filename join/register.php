<?php

$conn=mysqli_connect("localhost","test","1111","testdb");

if(!$conn){
    echo "연결실패다";
}
else{
    echo "연결 성공이닷~";
}

$uid = $_POST["uid"];
$upass = $_POST["upass"];
$uname = $_POST["uname"];
$uemail = $_POST["uemail"];

$sql="insert into join1(user_id ,user_pass, user_name, user_email, reg_date) values('$uid','$upass','$uname','$uemail',now())";

mysqli_query($conn,$sql);
echo "데이터 추가 되었습니다";

mysqli_close($conn);






?>