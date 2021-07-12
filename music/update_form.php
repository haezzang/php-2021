<?php

$password = $_POST['pass'];
$num = $_POST['idx2'];    


$conn=mysqli_connect("localhost","test","1111","testdb");
$sql="select * from music where id=$num";
$result=mysqli_query($conn,$sql);


$re = mysqli_fetch_row($result);
if($re[5]!=$password ){
    echo "<script>alert('비밀번호가 일치하지않습니다');history.go(-1)</script>";
} else {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input:hover{
           background-color: pink;
           border: none;
        }
        input{
            background-color: plum;
        padding: 10px;
        border: none;
        }
        button{
            margin-left: 60px;
        }
        div{
            margin-left: 50px;
        }
    </style>
</head>
<body>
    
        <div>
            <form action="update.php?idx=<?php echo $re[0]?>" method="POST">
                <br>
                <input type="text" placeholder="제목" name="title" value="<?php  echo $re[1]?>"> <br>
                <br>
                <input type="text"placeholder="가수"  name="singer" value="<?php  echo $re[2]?>"> <br>
                <br>
                <input type="text"placeholder="장르"  name="genre" value="<?php  echo $re[3]?>"> <br>
                <br>
                <input type="text"placeholder="가격"  name="price" value="<?php  echo $re[4]?>"> <br>
                <br>
                <input type="text"placeholder="비밀번호"  name="passwd" value="<?php  echo $re[5]?>" > <br>
                <br>
                <input type="text"placeholder="발매년도"  name="date" value="<?php  echo $re[6]?>"> <br>
                <br>
                <button type="submit">전송</button>
            </form>
        </div>
    
</body>
</html>

<?php

    }


    ?>
