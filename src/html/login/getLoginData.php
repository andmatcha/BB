<?php

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


if($email AND $password){
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  header('Location: checkLoginData.php');
} else {
  header('Location: index.php?login_info=empty');
}
