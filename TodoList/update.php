<?php

$uid=$_GET["idx"];
$user=$_POST["user"];
$password=$_POST["password"];
$do=$_POST["do"];
$chk=$_POST["chk"];
$date=$_POST["date"];

include('./db_conn.php');
$sql="update todo set id='$uid', userid='$user', password='$password', todo='$do',chk='$chk' day='$date' where id=$uid";


mysqli_query($conn, $sql);
mysqli_close($conn);
echo "<script>alert('수정 되었습니다');</script>"

?>

<meta http-equiv="refresh" content="1;url=index.php">