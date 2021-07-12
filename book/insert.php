<?php
$title=$_POST["title"];
$author=$_POST["author"];
$price=$_POST["price"];


$conn=mysqli_connect("localhost","test","1111","testdb");
$sql="insert into book(title,author,price) values('$title','$author','$price')";
if($sql) {
    echo "<script>location.href='index.php'</script>";

}
mysqli_query($conn,$sql);

mysqli_close($conn);




?>