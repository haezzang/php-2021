<?php
$uid=$_POST["id"];
echo "ID : ".$uid."<br>";

$upass=$_POST["pass"];
echo "비밀번호 : ".$upass."<br>";

$upasschk=$_POST["passchk"];
echo "비밀번호 확인 : ".$upasschk."<br>";

$uname=$_POST["name"];
echo "이름 : ".$uname."<br>";

$uzender=$_POST["zender"];
echo "성별 : ".$uzender."<br>";

$umail1=$_POST["mail1"];
echo "이메일 : ".$umail1."@";
$umail2=$_POST["mail2"];
if(!$umail2){
$umail3=$_POST["mail3"];
echo $umail3."<br>";
}
else
echo $umail3."<br>";

$uaddress1=$_POST["address1"];
echo "주소 : ".$uaddress1."<br>";
$uaddress2=$_POST["address2"];
echo "상세주소 : ".$uaddress2."<br>";

$utel=$_POST["tel"];
echo "통신사 : ".$utel."<br>";
$phonenum1=$_POST["phonenum1"];
$phonenum2=$_POST["phonenum2"];
$phonenum3=$_POST["phonenum3"];
echo "휴대폰번호 : ".$phonenum1."-".$phonenum2."-".$phonenum3."<br>";



echo "관심 : ";
$ucar=$_POST["car"];
foreach($ucar as $value)
{
    echo $value."\t";
}

echo "<br>";
$uintroduce=$_POST["introduce"];
echo "자기소개 : ".$uintroduce."<br>";


?>