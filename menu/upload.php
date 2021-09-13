
<?php
include ('./db_conn.php');

$title=$_POST["title"];
$author=$_POST["author"];
$price=$_POST["price"];


$uploads_dir='uploads/';
$upload_file=$uploads_dir.basename($_FILES['img']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_file)){
    echo "<script>alert('데이터 삽입 성공');</script>";}
else{ echo "<script>alert('데이터 삽입 실패');</script>";} 
$sql="insert into book(title, author, price, img) values('$title', '$author','$price','$upload_file')";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="1;url=index.php">


