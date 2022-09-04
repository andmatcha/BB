<?php
require('/var/www/app/config/db_connect.php');

session_start();

$stmt = $db -> prepare('SELECT password FROM users WHERE email = :email');
$stmt -> execute([':email' => $_SESSION['email']]);
$user_password = $stmt -> fetch(PDO::FETCH_ASSOC);

if ($user_password['password'] === $_SESSION['password'])
{
  header('Location: /home');
} else {
  header('Location: /login/?login_info=wrong');
}

unset ($_SESSION['email']);
unset ($_SESSION['password']);
