<?php

$fname="php.txt";

$fp=fopen($fname,"w");
fwrite($fp,"Hello Php World~!");
$size=filesize($fname);
$fp=fopen($fname,"r");
$data=fread($fp,$size);
echo $data;
fclose($fp);



?>