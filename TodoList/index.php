<style>

table{
    border-collapse: collapse;
    text-align: center;

}


tr:nth-child(odd){
    background-color: rgb(206, 230, 240);
}
tr:hover{
    background-color:rgb(206, 230, 240);
}
a{
text-decoration: none;
border:0;
}
td{
    padding: 20px;
}
Button{
    font-size: 10pt;
    border-radius: 40px;
    background-color: rgb(206, 230, 240);

}

</style>

<h1>TODO LIST</h1>
<a href='insert.html'><Button>TODO 작성하기</Button></a>
<?php

//디비 접속
include('./db_conn.php');

$sql='select * from todo';
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
?>
<link rel="stylesheet" href="css.css"/>
<table border=1>
    <tr><td>순번</td>
    <td>작성자</td>
    <td>비밀번호</td>
    <td>할 일</td>
    <td>수행여부</td>
    <td>작성날짜</td>
    <td>비고</td></tr>
<?php
    for($i=0;$i<$count;$i++) {
    $re=mysqli_fetch_row($result);
?>
<tr>
    <?php
echo "<td>".$re[0]."<td>".$re[1]."<td>".$re[2]."<td>".$re[3]."<td>".$re[4]."<td>".$re[5];
?>

<td><a href='u_password.php?idx=<?php echo $re[0]?>'>수정</a>&nbsp;&nbsp; <a href='d_password.php?idx=<?php echo $re[0]?>'>삭제</td></tr>
<?php }
?>
</table>
<br>



