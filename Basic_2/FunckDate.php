<?php

echo date("오늘은 Y년 m월 d일입니다");
echo "<br>".date("지금 시각은 H시 m분 s초입니다");
echo "<br>".date("Y/m/d h/i/s"); //외국과 9시간 차이난다
echo "<br> mktime은".mktime(0,0,0,3,29,2021);  //2000년 1월 1일부터 현재까지의 시간을 수치로 표현

$today=getdate();
echo "<br>";
print_r($today);

echo "<br> 오늘은".$today['year']."년".$today['mon']."월".$today['mday']."일".$today['hours']."시".$today['minutes']."분".$today['seconds']."초";  
?>