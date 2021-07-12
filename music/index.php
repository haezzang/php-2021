<?php
$conn=mysqli_connect('localhost','test','1111','testdb');
$sql='select * from music';
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
?>
<link rel="stylesheet" href="css.css"/>
<table border=1>
    <tr><td>순번</td><td>제목</td><td>가수</td><td>장르</td><td>가격</td><td>비밀번호</td><td>발매년도</td><td>비고</td>
<?php
for($i=0;$i<$count;$i++) {
    $re=mysqli_fetch_row($result);
?>
<tr>
<?php
echo "<td>".$re[0]."<td>".$re[1]."<td>".$re[2]."<td>".$re[3]."<td>".$re[4]."<td>".$re[5]."<td>".$re[6];
?>

<td><a href='u_password.php?idx=<?php echo $re[0]?>'>수정하기</a>&nbsp;&nbsp; <a href='d_password.php?idx=<?php echo $re[0]?>'>삭제하기</td></tr>
<?php }
?>
</table>
<br>
<a href='insert.html'>추가하기</a>