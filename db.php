<?php
    // ホスト名、データベースのユーザー名、パスワード、およびデータベース名を入力します。
    // サーバー・ユーザー名・パスワード・データベース名をそれぞれ記入してください。
    $con = mysqli_connect("サーバー","ユーザー名","パスワード","データベース名");
    //　接続を確認する
    if (mysqli_connect_errno()){
        echo "MySQL への接続に失敗しました: " . mysqli_connect_error();
    }
?>
