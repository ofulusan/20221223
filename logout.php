<?php
    session_start();
    // セッションの破棄
    if(session_destroy()) {
        // ホームページへのリダイレクト
        header("Location: login.php");
    }
?>
