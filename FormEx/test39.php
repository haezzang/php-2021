<?php
$uid=$_POST["id"];
$upass=$_POST["pass"];

if($uid=="kim@gmail.com" && $upass=="1111")
    echo "로그인이 되었습니다";

else if($uid!="kim@gmail.com" && $upass!="1111")
echo "<script>location.href='test34.html'</script>";
else
    echo"아이디나 비밀번호가 맞지 않습니다";
    
?>