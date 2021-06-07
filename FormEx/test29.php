<?php
$unum=$_POST["num"];

for($i=1; $i<=$unum; $i++){
    if($i%7==0)
        echo $i."<br>";
}
?>