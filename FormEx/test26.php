<!-- 절댓값 출력 -->
<?php
$unum=$_POST["num"];

if($unum<0)
    echo "절댓값 출력 : ".-$unum;
    else
    echo "절댓값 출력 : ".$unum;

?>