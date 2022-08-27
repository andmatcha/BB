<?php

const MESSAGE_MAX_LENGTH = 140;

session_start();

// 投稿送信時の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF対策
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        $_SESSION['error'] = '不正なアクセスです！';
        header('Location: /home');
        exit();
    }
    unset($_SESSION['token']);

    // XSS対策
    $sanitizedData = [];
    foreach ($_POST as $key => $value) {
        $sanitizedData[$key] = htmlspecialchars($value, ENT_QUOTES);
    }

    // 文字数制限
    if (mb_strlen($sanitizedData['message']) > MESSAGE_MAX_LENGTH) {
        $_SESSION['error'] = '文字数の上限を超えています！';
        header('Location: /home');
        exit();
    }

    // TODO ここでDB保存処理

    $_SESSION['note'] = '投稿が完了しました！ ユーザーID: ' . '1' . ', 投稿内容: ' . $sanitizedData['message']; // FIXME valueをセッションから取得したユーザーIDに変更
    header('Location: /home');
    exit();
}

// CSRF対策用のトークンを生成し、セッションに保存
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

// 投稿完了メッセージ
$note = $_SESSION['note'];
unset($_SESSION['note']);

// エラーメッセージ
$error = $_SESSION['error'];
unset($_SESSION['error']);

require('/var/www/app/pages/Layouts.php');
require('/var/www/app/pages/Components.php');

/** View */

layoutStart('トップ | ひとこと掲示板', 'ひとこと掲示板');
if (!is_null($note)) :
?>
    <p class="home__note"><?= $note ?></p>
<?php
elseif (!is_null($error)) :
?>
    <p class="home__error"><?= $error ?></p>
<?php
endif;
?>
<p>OOさん、メッセージをどうぞ</p>
<form action="" method="POST" class="home__form">
    <input type="hidden" name="token" value="<?= $token ?>">
    <?php
    cTextarea('message');
    cMainButton('投稿');
    ?>
</form>
<h2 class="headding2">投稿一覧</h2>
<?php
cMessageCard(1, 1, 'jin', '2022-05-08', 'pictures/pic1.jpeg', 'はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！はじめましたーーーよろしく！！');
layoutEnd();
