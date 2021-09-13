
<head>
    <meta charset="UTF-8">   
    <title>관리자 로그인</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
 


    <style>

        button{
            text-align: center;
            border:none;
            border-radius: 10px;
            font-family: 'NanumSquare', sans-serif !important;
            background-color: rgb(206, 230, 240);
            border-radius: 40px;
            height: 50px;
            width: 100px;
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
            text-align: center;
            border:none;
            border-radius: 10px;
            height: 50px;
            width: 200px;
        }
        input:hover{

    background-color:rgb(206, 230, 240);
}
form{
    margin-top: 50px;

}

    </style>
</head>

<body>

    <div>
        <center>
            <br>
            <h1>관리자 로그인 </h1>
            <form action="admin_chk.php" method="POST">
                <br><br>
                <input type="text" placeholder="아이디" name="id"> <br>
                <br>
                <input type="password"placeholder="비밀번호"  name="password"> <br>
                <br>
              <button>로그인</button>
              </form>
     
        </center>
    </div>

</body>
</html>

