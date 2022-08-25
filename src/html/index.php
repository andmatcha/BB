<?php

require('../app/pages/Layouts.php');
require('../app/pages/Components.php');

layoutStart('トップ | ひとこと掲示板', 'ひとこと掲示板');
?>
<p>OOさん、メッセージをどうぞ</p>
<?php
cTextarea('message', []);
cMainButton('投稿');
?>
<h2 class="headding2">投稿一覧</h2>
<?php
cMessageCard(1, 1, 'jin', '2022-05-08', 'pictures/pic1.jpeg', 'はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！');
layoutEnd();
