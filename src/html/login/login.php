<?php
require('/var/www/app/config/db_connect.php');

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

if ($email and $password) {
  $stmt = $db->prepare('SELECT password FROM users WHERE email = :email');
  $stmt->execute([':email' => $email]);
  $user_password = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($user_password['password'] === $password) {
    header('Location: /home');
    exit;
  } else {
    header('Location: /login/?login_info=wrong');
    exit;
  }
} else {
  header('Location: index.php?login_info=empty');
}
