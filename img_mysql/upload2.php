<?php
include ('./db_conn.php');

$fname=$_FILES['userfile']['name'];

$f_type=$_FILES['userfile']['type'];
$f_size=$_FILES['userfile']['size'];
$f_tmp=$_FILES['userfile']['tmp_name'];

$uploads_dir='uploads/';
$upload_file=$uploads_dir.basename($_FILES['userfile']['name']);



if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_file)){echo "성공";}
else{echo "실패";} 
$sql="insert into img2(fname, fsize, fpath, ftmp_name) values('$fname', '$f_size','$upload_file','$f_tmp')";

mysqli_query($conn,$sql);
echo "업로드 완료";
?>
<a href="show2.php">이미지 디비에서 불러오기</a>
