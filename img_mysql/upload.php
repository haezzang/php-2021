<?php

include ('./db_conn.php');

if($conn){
    echo  "db success";
}

$f_name = $_FILES['userfile']['tmp_name'];

$size = getimagesize($f_name);
$f_size = $_FILES['userfile']['size'];
// $size : 배열이 된다
// 1. 파일의 정보를 가져오기
$width = $size[0];
$height = $size[1];
$type = $size[2];
$attr = $size[3];


// 2. 실제 파일을 읽어오기
$mypicture = addslashes(fread(fopen($f_name, "r"), filesize($f_name)));

$sql = "insert into img(img_type, img_blob, img_size, img_name) values('$size[2]', '$mypicture', '$f_size', '$f_name')";
mysqli_query($conn, $sql);
echo "이미지가 저장되었습니다.";

?>

<a href="show.php">이미지 디비에서 불러오기</a>