<!-- 사칙연산 -->
<?php

$unum1=$_POST["num1"];
$unum2=$_POST["num2"];

echo $unum1."+".$unum2."=".($unum1+$unum2)."<br>";
echo $unum1."-".$unum2."=".($unum1-$unum2)."<br>";
echo $unum1."*".$unum2."=".($unum1*$unum2)."<br>";
echo $unum1."/".$unum2."=".($unum1/$unum2)."<br>";
?>