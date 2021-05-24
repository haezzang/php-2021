<?php

//1.함수 작성
function add($x, $y){
    return $x+$y;
}

//2.함수호출
    //add(3,5);
    //echo  add(10,20);

    function sum(){
        $sum=0;
        for($i=1; $i<=10; $i++){
            $sum+=$i;
        }
        echo $sum;
    }

    function even_sum(){
        $sum=0;
        for($i=1; $i<=100; $i++){
            if($i%2==0)
                 $sum+=$i;
        }
        echo $sum;
    }

    function nSumm($x, $y){
        $sum=0;
        for($i=$x; $i<=$y; $i++){
            $sum+=$i;
        }
            
            return $sum;
    }

    function gugudan($x){
      
        for($i=1; $i<=9; $i++){
         echo $x." * ".$i." = ".($x*$i)."<br>";
        }
            
            
    }
     
    function double_sum(){
        $sum=0;
        for($i=1; $i<=100; $i++){
            if($i%3==0)    
                $sum+=$i;
        }
        echo $sum;
    }

    echo  sum()."<br>";
    echo even_sum()."<br>";
    echo nSumm(1,5)."<br>";
    echo gugudan(3)."<br>";
    echo double_sum()."<br>";

?>