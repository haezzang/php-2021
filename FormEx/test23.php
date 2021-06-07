<!-- n과 m을 입력받아 합구하기 -->
<?php
$unum1=$_POST["num1"];
$unum2=$_POST["num2"];

$sum=0;
for($i=$unum1; $i<=$unum2; $i++){
    $sum+=$i;
}
echo $sum;
?>