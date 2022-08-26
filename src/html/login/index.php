<?php

require('/var/www/app/pages/Layouts.php');
require('/var/www/app/pages/Components.php');

$empty_info = htmlspecialchars($_GET["empty_info"]);

layoutStart("ログイン|ひとこと掲示板", "ログイン");

?>

<form action="getLoginData.php" method="post">

<?php

if($empty_info):
?>
<p id="empty_info_message">メールアドレスとパスワードを入力してください</p>
<style>
  #empty_info_message{
    color: #f00000;
  }
</style>
<?php
endif;

cInputSection("メールアドレス", "user_address", "e-mail", []);
cInputSection("パスワード", "password", "text", []);
cMainButton("ログイン",["id" => "loginBtn"]);

?>

</form>

<style>
  #loginBtn{
    margin: 3% auto 0;
  }
</style>

<?php
layoutEnd();
