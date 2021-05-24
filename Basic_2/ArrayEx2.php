<?php

$color=array("red","blue","green","gray","white");
foreach($color as $arr)
echo $arr."\t";
?>

<br>
<?php
$color2=array("first"=>"white", "second"=>"yellow","third"=>"salmon");
foreach($color2 as $key=>$value)
echo "key : ".$key." value : ".$value."<br/>";
?>