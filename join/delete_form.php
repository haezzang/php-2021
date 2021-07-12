<?php

$pass=$_POST["pass"];
$num=$_POST["idx2"]; //사용자가 수정하는 인덱스번호가 들어있음
//사용자가 입력한 비밀번호가 들어있는 변수이름: $pass
//테이블에서 가져온 2번의 비밀번호가 들어있는 변수이름:$pass
$conn=mysqli_connect("localhost","test","1111","testdb");

$sql="select * from join1 where id=$num";
$res=mysqli_query($conn,$sql);


    $re=mysqli_fetch_row($res);

    if($re[2]==$pass){
    echo $pass."비밀번호 맞았다";
    }
    //echo "<script>location.href='edit.php'</script>";
    else if($re[2]!=$pass){
           echo "<script>alert('비밀번호가 일치 하지 않습니다'); history.go(-1)</script>";
    }
 
?>
