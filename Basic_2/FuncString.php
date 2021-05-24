<?php

$str="php is popular a scripting language";
//문자열 길이 출력
echo strlen($str) ;

?>
<hr>
<?php
//문자열 추출
$rest=substr("HelloPhpWelcome",5,5);  //첫숫자 시작위치 뒷숫자 문자 갯수
echo $rest."<br>";



$rest2=substr("HelloPhpWelcome",5);  //PhpWelcome 
echo $rest2;

$str2="010-1234-5678";
echo "<br>".substr($str2,-4,4);//5678
echo "<br>".substr($str2,-3);//678
echo "<br>".substr($str2,-4,-1);//오른쪽에서 4번째부터 시작인데 1개문자 제거 567
echo "<br>".substr($str2,-4,-3);// 5

?>

<hr>

<?php
$str3="Mary had a little lamb and She LOVED It So Much";
echo "<br>".strtolower($str3);
echo "<br>".strtoupper($str3);
?>

<hr>

<?php
$pizza="piece1/piece2/piece3/piece4/piece5";

$ar=explode("/",$pizza);
foreach($ar as $ar2){
echo "<br>".$ar2."\t";
}

$array=array("red","blue","green");
$str4=implode(" ",$array);
echo "<br>".$str4."\t";

$str5="one|two|three|four|five";
$ar3=explode("|",$str5);
foreach($ar3 as $ar4){
echo "<br>".$ar4."\t";
}

$arr2=array("lastname","email","phone","sns");
$str6=implode(",",$arr2);
echo "<br>".$str6."\t";

//str_replace ("바뀌어서 없어질 문자","변경완료될 문자","대상문자열");
$str7="you should eat fruits, should not buy";
//>>should >>could 변경
$res=str_replace("should","could",$str7);

$str8="Hellow wo Rid!";
echo "<br>".trim($str8);
$str9="I have a dream";
$find="a";
echo "<br>위치는".strpos($str9,$find);
?>