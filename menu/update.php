<?php

$uid=$_GET["idx"];
$title=$_POST["title"];
$author=$_POST["author"];
$price=$_POST["price"];


include ("./db_conn.php");


$sql="update book set id='$uid', title='$title', author='$author', price='$price' where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);


echo "<script>alert('수정 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=index.php">