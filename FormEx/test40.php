<?php
$arr=$_POST["menu"];
$umoney=$_POST["money"];
$sum=0;
foreach($arr as $value)
{
   
}
switch ($value) {
    case '밀크커피':
       $sum+=300; break;
     case '우유':
         $sum+=400; break;
     case '코코아':
         $sum+=500; break;
     case '율무차':
         $sum+=600;  break;   
     case '생수':
         $sum+=700;   break;       
 
}
if($umoney<$sum){
echo "잔액부족";
}

else{
foreach($arr as $value)
{
   echo $value."\t";
}
echo "나왔습니다 맛있게드세욤~";
}



?>