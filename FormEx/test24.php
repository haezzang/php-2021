<!-- n까지의 숫자중 짝수의 합 -->
<?php

$unum1=$_POST["num1"];
$unum2=$_POST["num2"];

$sum=0;
for($i=$unum1; $i<=$unum2; $i++){
    if($i%2==0)
        $sum+=$i;
}
echo $sum;
?>