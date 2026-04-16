<?php
session_start();

$uID = $_POST["uID"];
$uPWD = $_POST["uPwd"];

if ($uID == 'admin' && $uPWD == '1234') {
    $_SESSION['login'] = 'Yes';
    $_SESSION['role'] = 'admin';
    setcookie('uID', $uID, time()+3600); 
    header("Location: admin.php");
} elseif ($uID == 'teacher' && $uPWD == '5678') {
    $_SESSION['login'] = 'Yes';
    $_SESSION['role'] = 'teacher';
    setcookie('uID', $uID, time()+3600);
    header("Location: teacher.php");
} elseif ($uID == 'student' && $uPWD == '0000') {
    $_SESSION['login'] = 'Yes';
    $_SESSION['role'] = 'student';
    setcookie('uID', $uID, time()+3600);
    header("Location: student.php");
} else {
    echo "非法進入！權限不足，２秒後回登入頁面";
    header("Refresh:2; url=index.php");
}
?>