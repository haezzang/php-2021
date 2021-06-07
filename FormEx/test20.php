<?php
$uname=$_POST["name"];
echo "이름 : ".$uname."<br>";
$ubirth=$_POST["birth"];
echo "생년월일 : ".$ubirth."<br>";

echo "취미 : ";
for($i=0; $i<count($_POST["hobby"]); $i++){
    $uhobby=$_POST["hobby"];
    echo $uhobby[$i]."\t";
}
echo "<br>";
$uzender=$_POST["zender"];
echo "성별 : ".$uzender."<br>";

$uid=$_POST["id"];
echo "아이디 : ".$uid."<br>";

$upass=$_POST["pass"];
echo "생년월일 : ".$ubirth."<br>";

$uphonenum1=$_POST["phonenum1"];
$uphonenum2=$_POST["phonenum2"];
$uphonenum3=$_POST["phonenum3"];
echo "휴대폰번호 : ".$uphonenum1."-".$uphonenum2."-".$uphonenum3;

$uemail1=$_POST["email1"];

echo "이메일 : ".$uemail1."<br>";


?>