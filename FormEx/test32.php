<?php
$uscore=$_POST["score"];

if($uscore>=90)
    echo "A";
    else if($uscore>=80)
    echo "B";
    else if($uscore>=70)
    echo "C";
    else
    echo "F";


?>