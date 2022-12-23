<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>登録</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // フォームが送信されたら、値をデータベースに挿入します。
    if (isset($_REQUEST['username'])) {
        // バックスラッシュを削除します
        $username = stripslashes($_REQUEST['username']);
        //　文字列内の特殊文字をエスケープします
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>正常に登録されました。</h3><br/>
                  <p class='link'><a href='login.php'>ここをクリック</a>してログイン</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>必須フィールドがありません。</h3><br/>
                  <p class='link'>登録するには、<a href='registration.php'>ここをクリック</a>してください。</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">登録</h1>
        <input type="text" class="login-input" name="username" placeholder="ユーザー名" required />
        <input type="text" class="login-input" name="email" placeholder="メールアドレス">
        <input type="password" class="login-input" name="password" placeholder="パスワード">
        <input type="submit" name="submit" value="登録" class="login-button">
        <p class="link">すでにアカウントをお持ちですか？　<a href="login.php">ここでログイン</a></p>
    </form>
<?php
    }
?>
</body>
</html>
