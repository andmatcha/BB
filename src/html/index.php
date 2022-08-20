<?php

require('../app/pages/Layouts.php');
require('../app/pages/Components.php');

layoutStart('トップ | ひとこと掲示板', 'ひとこと掲示板');
?>
<p>メッセージをどうぞ</p>
<?php
cMainButton('投稿');
layoutEnd();
