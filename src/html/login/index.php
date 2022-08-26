<?php

require "../../app/pages/Layouts.php";
require "../../app/pages/Components.php";

layoutStart("ログイン|ひとこと掲示板", "ログイン");

?>

<form>

<?php

cInputSection("メールアドレス", "user", "text", []);
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
