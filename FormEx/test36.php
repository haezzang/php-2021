<?php
$uhcnt=$_POST["hcnt"];
$uccnt=$_POST["ccnt"];
$uscnt=$_POST["scnt"];

$res=($uhcnt*500)+($uccnt*300)+($uscnt*500);
echo " 햄버거2개, 쉐이크 1개 주문. 총 가격".$res."원"
?>
