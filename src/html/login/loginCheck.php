<?php
session_start();
if($_SESSION['isloginToShortBbs'] !== true){
  echo ('403 FORBIDDEN');
  exit;
}
