<?php
$id=$_POST['id'];
$password=$_POST['password'];


if($id=="admin" && $password=="admin") {
    echo "<script>alert('환영합니다');</script>";
    echo "<script>location.href='insert.html'</script>";

}

else{
    
    echo "<script>alert('관리자가 아닙니다');</script>";
    echo "<script>location.href='index.php'</script>";
}

?>