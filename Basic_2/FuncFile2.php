<?php

$fp=fopen("data.txt","r");
while(!feof($fp)){//
    echo fgetc($fp);
}


?>

<hr>

<?php
$fname="data.txt";
$fp=fopen($fname,"r");

while(!feof($fp)){
    echo fgets($fp);
}

?>

<hr>
<?php
$fname="data.txt";
$fp=fopen($fname,"r");
$size=filesize($fname);

echo "파일의 크기는".$size;

echo "<br>".fread($fp, $size);
fclose($fp);
?>
