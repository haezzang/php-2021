<?php

$arr=array("망고","포도","사과");

for($i=0; $i<sizeof($arr); $i++){
    echo $arr[$i]."<br>";
}
foreach($arr as $fruit)
    echo $fruit."<br>";

?>