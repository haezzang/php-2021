<?php

$arr=$_POST["sel"];
//for($i=0; $i<count($arr); $i++){
 //   $arr=$_POST["sel"];
//    echo $arr[$i]."를 선택 하셨습니다. <br>";
    
//}//

foreach($arr as $value)
{

    echo $value."\n";
}

?>