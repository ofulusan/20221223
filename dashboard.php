<?php
//　ユーザーがログインしたら表示されるページを作成するには、該当ページの先頭に
//　include("auth_session.php");を入力してください。
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ダッシュボード - クライアント領域</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>ようこそ、 <?php echo $_SESSION['username']; ?>さん</p>
        <p>あなたはユーザー ダッシュボード ページにいます。</p>
        <p><a href="logout.php">ログアウト</a></p>
    </div>
</body>
</html>