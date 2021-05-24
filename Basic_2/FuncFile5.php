<?php

$test = "PHP is a popular general-purpose scripting language"; 
$fp = fopen("a.txt", "w");
fwrite($fp, $test);
fclose($fp);

?>

<?php

$fname = "a.txt";
$fp = fopen($fname, "r");
$fsize = filesize($fname);      // a.txt크기가 100이면 $fsize = 100 
$data = fread($fp, $fsize);
echo $data;

fclose($fp);

?>
<hr>
<?php

// 읽어오기 : file_get_contents()
$str = file_get_contents("a.txt");
echo "file_get_contents로 읽어오기   ".$str;

file_put_contents("a.txt", "John Doe");
?>