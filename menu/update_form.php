<?php

include ("./db_conn.php");
$num = $_GET['idx']; 

$sql="select * from book where id=$num";
$result=mysqli_query($conn,$sql);
$re = mysqli_fetch_row($result);



?>

<head>
    <title>책 정보 수정</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
 


    <style>

        button{
 
            font-family: 'NanumSquare', sans-serif !important;
            border: none;
            background-color:rgb(60, 191, 247);
            border-radius: 40px;
            height: 25px;
            width: 80;
        }
        button:hover{
            background-color:rgb(206, 230, 240); 
        }

        body{
            font-family: 'NanumSquare', sans-serif !important;
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
            font-family: 'NanumSquare', sans-serif !important;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            border: none;
            background-color:rgb(206, 230, 240); 
            border-radius: 10px;
            height: 50px;
            width: 200px;
        }
        input:hover{

        border: none;
    background-color:rgb(60, 191, 247);
}

    </style>
</head>

<body>

    <div>
        <center>
            <br>
            <h1>책 정보 수정</h1>
            <form action="update.php?idx=<?php echo $re[0]?>" method="POST" enctype="multipart/form-data">
                <br>
                제목<br>
                <input type="text" placeholder="책 제목" name="title" value="<?php echo $re[1]?>"> <br>
                <br>
                작가<br>
                <input type="text" placeholder="작가" name="author" value="<?php echo $re[2]?>"> <br>
                <br>
                가격<br>
                <input type="text" placeholder="가격" name="price" value="<?php echo $re[3]?>"> <br>
                <br>
                <br><br>
                <button type="submit">수정하기</button>
              </form>
              
        </center>
    </div>

</body>
</html>