<?php

$dName="new";
if(opendir($dName)){
    echo"해당 폴더를 열었습니다";
}
else{
    echo"해당폴더가 존재하지 않습니다";

}

?>
<hr>

<?php

$dName="../old";
if(opendir($dName)){
    echo"해당 폴더를 열었습니다";
}
else{
    echo"해당폴더가 존재하지 않습니다";

}

?>
<br>
<?php
$result=is_dir("old");

echo"결과는 ".$result;


?>
<br>
<?php
$res=is_dir("test3.php");
echo"결과는 ".$res;
?>
<hr>
<?php
$dir="../BASICPHP"; //루트밑의 basciphp안에 있는 모든 것 출력
$file=scandir("$dir");

print_r($file);
?>
<hr>
<?php
$dir="../test"; 
$file=scandir("$dir");

print_r($file);
?>