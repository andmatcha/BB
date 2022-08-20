<?php

function convertAttributesArrayToString($attributes)
{
    $attributesString = '';
    foreach ($attributes as $key => $value) {
        $attributesString .= ' ' . $key . '="' . $value . '"';
    }
    return $attributesString;
}

function cMainButton($text, $attributes = [])
{
    $attributesString = convertAttributesArrayToString($attributes);
?>
    <button class="c_main_button" <?= $attributesString ?>><?= $text ?></button>
    <style>
        .c_main_button {
            background-color: #6EAACC;
            color: #FFF;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 48px;
            height: 64px;
            font-size: 20px;
        }
    </style>
<?php
}

function cInputSection($label, $name, $type,  $attributes = [])
{
    $attributesString = convertAttributesArrayToString($attributes);
?>
    <div class="c_input_section">
        <label for="<?= $name ?>" class="c_input_label"><?= $label ?></label>
        <input name="<?= $name ?>" type="<?= $type ?>" class="c_input" <?= $attributesString ?>>
    </div>
    <style>
        .c_input_section {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .c_input_label {
            font-size: 16px;
            line-height: 24px;
        }

        .c_input {
            background-color: #FFF;
            border-radius: 8px;
            width: 100%;
            height: 36px;
        }
    </style>
<?php
}

function cMessageCard($userId, $authorId, $name, $datetime, $picturePath, $message)
{
?>
    <div class="c_message_card">
        <div class="c_message_picture">
            <img src="<?= $picturePath ?>" alt="">
        </div>
        <div class="c_message_main">
            <div class="c_message_body">
                <p class="c_message_text"><?= $message ?></p>
                <a href="" class="c_message_show_more">もっと見る</a>
            </div>
            <div class="c_message_info">
                <div class="c_message_info_inner">
                    <?php if ($userId === $authorId) : ?>
                        <p>あなた</p>
                    <? else : ?>
                        <p><?= $name ?>さん</p>
                    <?php endif; ?>
                    <p><?= $datetime ?></p>
                </div>
                <?php if ($userId === $authorId) : ?>
                    <a href="" class="c_message_delete">削除</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <style>
        .c_message_card {
            width: 100%;
            height: 96px;
            padding: 16px;
            display: flex;
            gap: 16px;
            background-color: #FFF;
            align-items: center;
            letter-spacing: 1px;
            border-radius: 8px;
        }

        .c_message_picture {
            width: 64px;
            height: 64px;
        }

        .c_message_main {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            gap: 8px;
            width: calc(100% - 136px);
        }

        .c_message_body {
            display: flex;
            justify-content: space-between;
        }

        .c_message_text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 80%;
        }

        .c_message_show_more {
            color: #0B7EBE;
        }

        .c_message_info {
            display: flex;
            justify-content: space-between;
        }

        .c_message_info_inner {
            display: flex;
            gap: 32px;
        }

        .c_message_delete {
            color: #E94A4A;
        }
    </style>
<?php
}
