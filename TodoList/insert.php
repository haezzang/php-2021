<?php

$user=$_POST["user"];
$password=$_POST["password"];
$do=$_POST["do"];
$chk=$_POST["chk"];
$date=$_POST["date"];

//디비 접속
include('./db_conn.php');

$sql="insert into todo(userid,password,todo,chk,day)values ('$user','$password','$do','$chk','$date')";
mysqli_query($conn,$sql);

if($sql) {
    echo "<script>location.href='index.php'</script>";
    }

mysqli_close($conn);



?>