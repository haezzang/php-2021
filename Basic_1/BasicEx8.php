<?php 

$sum=0;
$cnt=0;
for($i=30; $i<=77; $i++){

    if($i%3==0 || $i%5==0){
       $sum+=$i;
       $cnt++;
    }
    
}

echo "합 : ".$sum;
echo "<br>평균 : ".($sum/$cnt);


?>