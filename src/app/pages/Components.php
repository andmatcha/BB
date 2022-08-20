<?php

function cMainButton($text, $attributes = [])
{
    $attributesString = '';
    foreach($attributes as $key => $value) {
        $attributesString .= ' ' . $key . '="' . $value . '"';
    }
?>
    <button class="c_main_button"<?= $attributesString ?>><?= $text ?></button>
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
