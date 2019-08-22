<?php
    session_start();
    session_regenerate_id(true);
    if (isset($_SESSION['login']) == false) {
        echo 'ログインされていません<br>';
        print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
        exit();
    } else {
        echo $_SESSION['staff_name'].'さんログイン中<br><br>';
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
  </head>
  <body>
    スタッフが選択されていません。<br>
    <a href="staff_list.php">戻る</a>
  </body>
</html>