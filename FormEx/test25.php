<!-- 홀수 짝수 판별 -->
<?php

$unum=$_POST["num"];

if($unum%2==0)
echo "짝수입니다";
else
echo "홀수입니다";
?>