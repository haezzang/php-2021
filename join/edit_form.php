<?php

// 사용자가 입력한 비밀번호를 가지고 온다.
$password = $_POST['pass'];
$num = $_POST['idx2'];     // 사용자가 수정하는 인덱스 번호가 들어있음


// DB 접속
$url = "localhost";
$id = "test";
$pass = "1111";
$db = "testdb";

$conn = mysqli_connect($url, $id, $pass, $db);

// 쿼리
$sql = "select * from join1 where id=$num";
$result = mysqli_query($conn, $sql);

// 한 줄 씩 가져온다.
$re = mysqli_fetch_row($result);
if($re[2]!=$password ){
    echo "<script>alert('비밀번호가 일치하지않습니다');history.go(-1)</script>";
} else {?>

    <form method="POST" action="register.php">
        <table>
            <tr>
                <tr>
                    <td>아이디</td>
                    <td>
                        <input type="text" name="uid" value="<?php echo $re[1]?>"> 
                    </td>  
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td>
                        <input type="password" name = "upass" value="<?php echo $re[2]?>"> 
                    </td>
                </tr>
                <tr>
                    <td>이름</td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $re[3]?>">
                    </td>           
                </tr>
                <tr>
                    <td>이메일</td>
                    <td>
                        <input type="text" name="uemail" value="<?php echo $re[4]?>">
                    </td>
                </tr>
            </tr>
        </table>
        <button type="submit">수정완료</button>
    </form>
<?php } ?>

