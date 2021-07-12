<?php

$uid=$_GET["idx"];
$title=$_POST["title"];
$singer=$_POST["singer"];
$genre=$_POST["genre"];
$price=$_POST["price"];
$passwd=$_POST["passwd"];
$date=$_POST["date"];

$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');
$sql="update music set id='$uid', song_title='$title', song_singer='$singer', song_genre='$genre',song_price='$price' song_passwd='$passwd', song_date='$date' where id=$uid";
mysqli_query($conn, $sql);
mysqli_close($conn);


echo "<script>alert('수정 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=index.php">