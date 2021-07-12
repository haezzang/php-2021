<?php
 $idx_=$_GET["idx"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>비밀번호를 입력하세요</h2>
    <form action="update_form.php" method="post">
    <input type="password" name="pass">
    <button >입력완료</button>
    <input type="hidden" name="idx2" value="<?php echo $idx_?>">
    </form>
</body>
</html>

