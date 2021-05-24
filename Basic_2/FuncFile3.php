<?php

$fname="text.txt";
//w모드일때는 쓰고자 하는 파일이 없으면. 자동 생성
$fp=fopen($fname,"w"); //추가 노노임 덮어쓰기
//fputs($fp,"12346579");
fwrite($fp, "php is server side");
echo"저장완료~";
fclose($fp);

?>

<?php

$fname="text.txt";
$fp=fopen($fname,"a");
//fputs($fp,"12346579")
fwrite($fp, "it is a long");
fclose($fp);

?>