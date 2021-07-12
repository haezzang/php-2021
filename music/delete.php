<?php

$uid=$_POST["idx"];
$conn=mysqli_connect('localhost','test','1111','testdb');
$sql="delete from music where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);

echo "<script>alert('삭제 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=index.php">