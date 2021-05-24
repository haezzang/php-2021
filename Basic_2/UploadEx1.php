<?php
//1. 목표: 업로드한 파일을 uploads라는 폴더안에 넣어야 한다<div class=""></div>

$upload_dir='./uploads'; //현재폴더안의 uploads라는 폴더를 의미

$file_name=$_FILES['myfile']['name']; //원래 이름
echo $file_name;
echo "<br>";

$ar=explode(".",$file_name);
echo "확장자는".$ar[1]."<br>";
// type, tmp_name, size 출력시켜봐
$file_type=$_FILES['myfile']['type'];
$file_tmp_name=$_FILES['myfile']['tmp_name']; //이상한 이름
$file_size=$_FILES['myfile']['size'];

//3. 임시디렉토리에 있는 파일을 원래의 계획했던 디렉토리로 이동시킨다.
//move_uploaded_file(임시디렉토리의 파일이름, 원래폴더의 원래의 이름);
move_uploaded_file($_FILES['myfile']['tmp_name'], "$upload_dir/$file_name");
// echo "<h2>파일정보<h2>
// <ul>
//<li> 파일명: $file_error</li> //에러
//<li> 파일명: $file_tmp_name</li> //이상한 이름
//     <li> 파일명: $file_name</li>
//     <li>파일타입: $file_type</li>
//     <li>파일크기 : $file_size</li>
// </ul>";    
echo "파일전송완료";

?>
