<?php

if(isset($_COOKIE['uID'])){
    echo $_COOKIE['uID']."歡迎回來！";
    echo "<a href='cookiedel.php'>刪除COOKIE</a>";
}

?>

<center>
<h2>登入</h2>
<form action="logincheck.php" method="POST">

ID:<input type="text" name="uID"></br>
Password:<input type="password" name="uPwd"></br>
<input type="submit">

</form>