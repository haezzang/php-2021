<?php
$url="localhost";
$id="test";
$password="1111";
$db="testdb";
$uid=$_GET["idx"];

$conn = mysqli_connect($url, $id, $password, $db);
$sql="delete from book where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);


echo "<script>alert('삭제 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=index.php">