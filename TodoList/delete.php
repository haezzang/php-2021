<?php

$password = $_POST['pass'];
$uid=$_POST["idx"];  


//디비 접속
include('./db_conn.php');

$sql="select * from todo where id=$uid";
$result=mysqli_query($conn,$sql);


$re = mysqli_fetch_row($result);
if($re[2]!=$password ){
    echo "<script>alert('비밀번호가 일치하지않습니다');history.go(-1)</script>";
} 

else {

$conn=mysqli_connect('localhost','test','1111','testdb');
$sql="delete from todo where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);

echo "<script>alert('삭제 되었습니다');</script>";

}
?>
<meta http-equiv="refresh" content="1;url=index.php">
