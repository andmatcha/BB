<?php

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


if($email AND $password){
  echo $email . ' ' . $password ;
} else {
  header('location:index.php?empty_info=true');
}
