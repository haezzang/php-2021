<?php
$conn=mysqli_connect("localhost","test","1111","testdb");
$sql="select * from book";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
?>

<link rel="stylesheet" href="css.css"/>

<table border=1>
    <tr><td>순번</td><td>제목</td><td>작가</td><td>가격</td><td>비고</td>
<?php
for($i=0;$i<$count;$i++) {
    $re=mysqli_fetch_array($result);
?>
<tr>
<?php
echo "<td>".$re['id']."<td>".$re['title']."<td>".$re['author']."<td>".$re['price'];?>
<td><a href='update_form.php?idx=<?php echo $re['id']?>'>수정하기</a>&nbsp;&nbsp; <a href='delete.php?idx=<?php echo $re['id']?>'>삭제하기</td></tr>";
<?php }?>
</table>
<br>
<a href='insert.html'>추가하기</a>