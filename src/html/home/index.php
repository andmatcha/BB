<?php

session_start();

// 投稿送信時の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        echo '不正なアクセスです';
        exit();
    }
    unset($_SESSION['token']);
    $_SESSION['note'] = '投稿が完了しました！ ユーザーID: ' . $_POST['user_id'] . ', 投稿内容: ' . $_POST['message'];
    header('Location: /home');
    exit();
}

// CSRF対策用のトークンを生成し、セッションに保存
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

// 投稿完了メッセージ
$message = $_SESSION['note'];
unset($_SESSION['note']);

require('/var/www/app/pages/Layouts.php');
require('/var/www/app/pages/Components.php');

/** View */

layoutStart('トップ | ひとこと掲示板', 'ひとこと掲示板');
if (!is_null($message)) :
?>
    <p><?= $message ?></p>
<?php
endif;
?>
<p>OOさん、メッセージをどうぞ</p>
<form action="" method="POST" class="home__form">
    <input type="hidden" name="token" value="<?= $token ?>">
    <input type="hidden" name="user_id" value="1"> <!-- FIXME valueをセッションから取得したユーザーIDに変更 -->
    <?php
    cTextarea('message');
    cMainButton('投稿');
    ?>
</form>
<h2 class="headding2">投稿一覧</h2>
<?php
cMessageCard(1, 1, 'jin', '2022-05-08', 'pictures/pic1.jpeg', 'はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！');
layoutEnd();
