<?php

require('../app/pages/Layouts.php');
require('../app/pages/Components.php');

layoutStart('トップ | ひとこと掲示板', 'ひとこと掲示板');
?>
<p>メッセージをどうぞ</p>
<?php
cMainButton('投稿');
cMessageCard(1, 1, 'jin', '2022-05-08', 'pictures/pic1.jpeg', 'はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！');
layoutEnd();
