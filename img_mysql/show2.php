
<head>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
<script>
function imageView(url) {
	if(url) {
    //alert(url);
		var imgW = document.getElementById('img1').naturalWidth;

		var imgH = document.getElementById('img1').naturalHeight;

		var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);

		imgWindow.document.write("<img src='"+url+"'>");

	}
}
</script>

<table class="table">

  <tr>
    <th scope="col">파일이름</th>
    <th scope="col">파일크기</th>
    <th scope="col">파일경로</th>
    <th scope="col">이미지</th>
  </tr>

  <tr>
  

<?php
include ("./db_conn.php");

//img2에 있는 모든 파일 가지고 오기
//가지고 온 데이터 갯수구해서 echo 로 출력
$sql="select * from img2";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++) {
    $re=mysqli_fetch_array($result);
   
    echo "<td>".$re['fname']."</td><td>".$re['fsize']."</td><td>".$re['fpath']."</td>";

?>
 <td><img src="<?php echo $re['fpath']?>" onclick="imageView('<?php echo $re['fpath']?>')" id="img1" width="50px" height="50px">
  </td>  
</tr>


  <?php
  }
  ?>
  </table>
 