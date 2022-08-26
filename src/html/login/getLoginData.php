<?php

$user_address = htmlspecialchars($_POST["user_address"]);
$password = htmlspecialchars($_POST["password"]);


if($user_address AND $password){
  echo $user_address . " " . $password ;
} else {
  header("location:index.php?empty_info=true");
}
