<?php
$u_age=$_POST["age"];
$u_fee=$_POST["fee"];
$u_Nfee=$_POST["Nfee"];
$u_freefee=$_POST["freefee"];
$u_Nfreefee=$_POST["Nfreefee"];
$u_2freefee=$_POST["2freefee"];
$u_comfee=$_POST["comfee"];



if($u_age<=12 || $u_age>=65){
$u_fee=19000;
$u_Nfee=16000;
$u_freefee=24000;
$u_Nfreefee=21000;
$u_2freefee=40000;
$u_comfee=40000;
}
else{
$u_fee=26000;
$u_Nfee=21000;
$u_freefee=33000;
$u_Nfreefee=28000;
$u_2freefee=55000;
$u_comfee=54000;
}

if(!$u_fee) $u_fee=0;
else if(!$u_Nfee) $u_Nfee=0;
else if(!$u_freefee) $u_freefee=0;
else if(!$u_Nfreefee) $u_Nfreefee=0;
else if(!$u_2freefee) $u_2freefee=0;
else if(!$u_comfee) $u_comfee=0;

$res=$u_fee+$u_Nfee+$u_freefee+$u_Nfreefee+$u_2freefee+$u_comfee;

echo "총 결제 금액은 ".$res."원입니다";
?>