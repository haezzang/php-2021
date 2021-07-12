<?php
$uid=$_GET["idx"];
$conn=mysqli_connect("localhost","test","1111","testdb");
$sql="select * from book where id=$uid";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
for($i=0;$i<$count;$i++) {
    $re=mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <form action="update.php?idx=<?php echo $re['id']?>" method="POST">
            <br>
                <input  placeholder="번호" name="num"  value="<?php  echo $re['id']?>" > <br>
                <br>
                <input type="text" placeholder="책 제목" name="title" value="<?php  echo $re['title']?>" > <br>
                <br>
                <input type="text"placeholder="작가"  name="author" value="<?php  echo $re['author']?>" > <br>
                <br>
                <input type="text"placeholder="가격"  name="price" value="<?php  echo $re['price']?>" > <br>
                <br>
                <button type="submit">전송</button>
            </form>
        </div>
   

</body>
</html>