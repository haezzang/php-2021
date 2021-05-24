<?php

$fp=fopen("counter.txt","r");

$num=fread($fp, filesize("counter.txt"));
echo $num."번째 방문입니다.";
$num++;
$fp=fopen("counter.txt","w");
fwrite($fp,$num);
fclose($fp);

?>


 
