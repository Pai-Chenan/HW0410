<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['role'] == 'student'){
    echo "<h1>Welcom! Login Success</h1>";
    echo "<p>您可以查看成績與課程。</p>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<h1>非法進入！權限不足，２秒後回登入頁面</h1>";
    header("Refresh:2; url=index.php");
}
?>