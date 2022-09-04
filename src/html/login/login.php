<?php
require('/var/www/app/config/db_connect.php');

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

if ($email and $password) {
  $stmt = $db->prepare('SELECT COUNT(*) count FROM users WHERE email = :email AND password = :password');
  $stmt->execute([':email' => $email, ':password' => $password]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  // var_dump($result);
  if ($result['count'] !== '0') {
    header('Location: /home');
    exit;
  } else {
    header('Location: /login/?login_info=wrong');
    exit;
  }
} else {
  header('Location: index.php?login_info=empty');
}
