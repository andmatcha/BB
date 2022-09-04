<?php

require('/var/www/app/pages/Layouts.php');
require('/var/www/app/pages/Components.php');

$login_info = htmlspecialchars($_GET['login_info']);

layoutStart('ログイン|ひとこと掲示板', 'ログイン');

?>

<form action="getLoginData.php" method="post">

<?php

if($login_info === 'empty'):
?>
<p id="empty_info_message">メールアドレスとパスワードを入力してください</p>
<style>
  #empty_info_message{
    color: #f00000;
  }
</style>
<?php
elseif($login_info === 'wrong'):
  ?>
  <p id="wrong_info_message">メールアドレスかパスワードが間違っています</p>
  <style>
    #wrong_info_message{
      color: #f00000;
    }
  </style>
  <?php
  endif;

cInputSection('メールアドレス', 'email', 'email');
cInputSection('パスワード', 'password', 'password');
cMainButton('ログイン',['id' => 'loginBtn']);

?>

</form>

<style>
  #loginBtn{
    margin: 3% auto 0;
  }
</style>

<?php
layoutEnd();
