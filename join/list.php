<!-- <link rel="stylesheet" href="css.css">
<style>
table{
    border-collapse:collapse;
}</style>
<?php


// $conn=mysqli_connect("localhost","test","1111","testdb");

// if(!$conn){
//     echo"연결실패";
// }
// else{
//     echo "연결성공"."<br>";
// }
// $sql="select * from join1 order by id desc";

// $result=mysqli_query($conn, $sql);
// //한줄씩 가져오기
// $cnt=mysqli_num_rows($result);

// echo "<table>";
// echo"<tr>";
// echo "<td>"."순번"."</td>";
// echo "<td>"."아이디"."</td>";
// echo "<td>"."비밀번호"."</td>";
// echo "<td>"."이름"."</td>";
// echo "<td>"."이메일"."</td>";
// echo "<td>"."가입날짜"."</td>";
// echo "<td>비고</td>";
// echo"</tr>";
// for($i=0; $i<$cnt; $i++){
// $re=mysqli_fetch_row($result);
// echo"<tr>";
// echo "<td>".$re[0]."</td>";
// echo "<td>".$re[1]."</td>";
// echo "<td>".$re[2]."</td>";
// echo "<td>".$re[3]."</td>";
// echo "<td>".$re[4]."</td>";
// echo "<td>".$re[5]."</td>";
// echo "<td><a href=password.php?$idx=$re[0]>수정</a>
// <a href=update.html>삭제</a></td>";

// echo "<br>";
// echo"</tr>";
// }
// echo "</table>";
// ?> -->

<link rel="stylesheet" href="css.css"/>

<table border=1>
    <tr><td>순번</td><td>아이디</td><td>비밀번호</td><td>이름</td><td>이메일</td><td>가입날짜</td><td>비고</td></tr>
<?php

//1. mysql 접속
$url='localhost';
$id='test';
$pass='1111';
$db='testdb';
$conn=mysqli_connect($url,$id,$pass,$db);

//2. 쿼리 날리기(테이블에 있는 모든 데이터 가지고 오기)
$sql="select * from join1 order by id desc";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
//2-1. 한줄씩 가지고 오기
for($i=0;$i<$count;$i++) {
    $re=mysqli_fetch_row($result);
?>
<tr>
<?php
echo "<td>".$re[0]."<td>".$re[1]."<td>".$re[2]."<td>".$re[3]."<td>".$re[4]."<td>".$re[5]."<td><a href='password.php?idx=$re[0]'>수정</a>&nbsp;&nbsp;<a href='paord.php?idx=$re[0]''>삭제</td></tr>";
}

?>
