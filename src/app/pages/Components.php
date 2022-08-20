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
        <input name="<?= $name ?>" type="<?= $type ?>" class="c_input">
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
