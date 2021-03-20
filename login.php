<?php
session_start();
$users = 'admin';
$pass = 'a029d0df84eb5549c641e04a9ef389e5';
 if($_POST['submit']){
 if($users == $_POST['user'] AND $pass == md5($_POST['pass']))
{
 $_SESSION['admin'] = $users;
 header("Location: index.php");
 exit;
 }
else echo '<p>Логин или пароль неверны!</p>';
} 
?>  
