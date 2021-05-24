<?php
$sum=0;
$cnt=0;
for($i=100; $i<=999; $i++){

    if($i%7==0){
        $sum+=$i;
        $cnt++;
    }
    
}
echo "갯수 : ".$cnt;
echo "<br>합 : ".$sum;

?>