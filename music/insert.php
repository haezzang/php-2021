<?php
$title=$_POST["title"];
$singer=$_POST["singer"];
$genre=$_POST["genre"];
$price=$_POST["price"];
$passwd=$_POST["passwd"];
$date=$_POST["date"];
    

$conn=mysqli_connect('localhost','test','1111','testdb');
$sql="insert into music(song_title,song_singer,song_genre,song_price,song_passwd,song_date) values('$title','$singer','$genre','$price','$passwd','$date')";
mysqli_query($conn,$sql);
if($sql) {
echo "<script>location.href='index.php'</script>";
}

mysqli_close($conn);
?>
