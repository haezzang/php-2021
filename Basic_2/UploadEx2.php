<?php
$upload_dir='./uploads'; //현재폴더안의 uploads라는 폴더를 의미

$file_name=$_FILES['myfile']['name'];  
$ar=explode(".",$file_name);
echo "확장자는".$ar[1]."<br>";

//원래 이름
$file_type=$_FILES['myfile']['type']; //파일타입
$file_tmp_name=$_FILES['myfile']['tmp_name']; //이상한 이름
$file_size=$_FILES['myfile']['size']; //파일 사이즈

move_uploaded_file($_FILES['myfile']['tmp_name'], "$upload_dir/$file_name");
echo "<h2>파일정보<h2>
 <ul>
    <li> 원래 이름: $file_name</li>

    <li> 임시이름: $file_tmp_name</li> //이상한 이름
    <li>파일타입: $file_type</li>
    <li>파일크기 : $file_size</li>
 </ul>";    
echo "파일전송완료";

?>