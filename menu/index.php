<head>
     <!-- Bootstrap CSS -->
     <title>Book List</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
 
<style>
    button{
      margin-right: 20px;
      font-family: 'NanumSquare', sans-serif !important;
        float: right;
        width:100px;
        height:50px;
        background-color:rgb(255, 245, 104);
        border-radius: 40px;
        border:none;
    }
    table{
      font-size:20px;
      text-align: center;
      font-family: 'NanumSquare', sans-serif !important;
    }
    img:hover{
      cursor:pointer;
    }

 
</style>
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
    <th scope="col">책 제목</th>
    <th scope="col">작가</th>
    <th scope="col">가격</th>
    <th scope="col">이미지</th>
    <th scope="col">비고</th>
  </tr>
<tr>

  

<?php

include ("./db_conn.php");

$sql="select * from book";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++) {
    $re=mysqli_fetch_array($result);
    echo "<td><a href='detail.php?rowx=$re[1]'>$re[1]</a></td><td>$re[2]</td><td>$re[3]</td>";
   

?>
 <td><img src="<?php echo $re['img']?>" onclick="imageView('<?php echo $re['img']?>')" id="img1" width="100px" height="100px">
  </td>
  <td><a href='update_form.php?idx=<?php echo $re['id']?>'>수정</a>/<a href='delete.php?idx=<?php echo $re['id']?>'>삭제</td>
</tr>


  <?php
  }
  ?>


  </table>

  <a href='./admin_login.php'><button>추가하기</button></a>
  
</form>

