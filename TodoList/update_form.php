<?php

$password = $_POST['password'];
$num = $_POST['idx'];    


$conn=mysqli_connect("localhost","test","1111","testdb");
$sql="select * from todo where id=$num";
$result=mysqli_query($conn,$sql);


$re = mysqli_fetch_row($result);
if($re[2]!=$password ){
    echo "<script>alert('비밀번호가 일치하지않습니다');history.go(-1)</script>";
} else {?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo</title>


    <style>
        body{
            background-color: rgb(206, 230, 240);
        }

        div{
            margin-top: 100px;
            margin-left: 350px;
            border-radius: 40px;
            height: 500px;
            width: 800px;
            background-color: white;
        }
        input{
            border-radius: 40px;
            height: 20px;
            width: 150px;
        }
        input:hover{

        
    background-color:rgb(206, 230, 240);
}

    </style>
</head>

<body>
    <div>
    <center>
            <h2 s>Todo! List!</h2>
            <form action="update.php?idx=<?php echo $re[0]?>" method="POST">
                <p>작성자</p>
                <input type="text" name="user" value="<?php  echo $re[1]?>"><br>
                <p>비밀번호</p>
                <input type="password" name="password" value="<?php  echo $re[2]?>"><br>
                <p>할 일</p>
                <input type="text" name="do" value="<?php  echo $re[3]?>"><br> <br>
                <p>수행여부</p>
                <input type="text" name="chk" value="<?php  echo $re[4]?>"><br>
                <p>작성날짜</p>
                <input type="date" name="date" value="<?php  echo $re[5]?>"><br><br>
                <button type="submit">작성하기</button>
              </form>
              
        </center>


    </div>


</body>
</html>

<?php
    }

    ?>
