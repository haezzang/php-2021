<?php


include ('./db_conn.php');
$sql="select * from img where id=2";
$result=mysqli_query($conn,$sql);
$re=mysqli_fetch_row($result);

//어떤 타입을 응답으로 보낼것인가 세팅하는 작업(mine 타입)
header("Content-type:image/png");
echo $re[2];
?>