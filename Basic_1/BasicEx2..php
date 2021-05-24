<?php

$cnt=0;
for($i=1; $i<=100; $i++){
    
    if($i%4==0){
        $cnt++;
        echo $i."\t";  
    }
    
    if($cnt%8==0)
        echo "</br>";
        
            
}

?>

