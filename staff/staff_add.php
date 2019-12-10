<?php
    session_start();
    session_regenerate_id(true);
    if (isset($_SESSION['login'])==false) 
    {
        print 'ログインされていません。<br>';
        print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
        exit();
    }
    else 
    {
        print $_SESSION['staff_name'];
        print 'さんログイン中<br>';
        print '<br>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        スタッフ追加<br>
        <br>
        <form action="staff_add_check.php" method="post">
            スタッフ名を入力してください。<br>
            <input type="text" name="name" style="width:200px"><br>
            パスワードを入力してください。<br>
            <input type="password" name="pass" style="width:100px"><br>
            パスワードをもう一度入力してください。<br>
            <input type="password" name="pass2" style="width:100px"><br>
            <br>
            <input type="button" value="戻る" onclick="history.back()">
            <input type="submit" value="OK">
        </form>
    </body>
</html>