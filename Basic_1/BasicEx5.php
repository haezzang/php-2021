<?php 
$even=0;
$odd=0;
for($i=1; $i<=30; $i++){

    if($i%2==0)
        $even+=$i;

    if($i%2==1)
        $odd+=$i;
}
echo "짝수 합 : ".$even;
echo "홀수 합 : ".$odd;

?>


