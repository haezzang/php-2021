<!-- n까지의 합 -->
<?php

$unum=$_POST["num"];
$sum=0;

for($i =1; $i<=$unum; $i++){
    $sum+=$i;

}
echo $sum;

?>