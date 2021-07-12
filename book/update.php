<?php
$url="localhost";
$id="test";
$password="1111";
$db="testdb";
$uid=$_GET["idx"];
$title=$_POST["title"];
$author=$_POST["author"];
$price=$_POST["price"];

$conn = mysqli_connect($url, $id, $password, $db);
$sql="update book set id='$uid', title='$title', author='$author', price='$price' where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);


echo "<script>alert('수정 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=index.php">