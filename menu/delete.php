<?php

include ("./db_conn.php");
$uid=$_GET["idx"];

$sql="delete from book where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);

echo "<script>alert('삭제 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=index.php">