<?php

function layoutStart($title, $headding)
{
?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://unpkg.com/destyle.css@3.0.2/destyle.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <h1 class="headding"><?= $headding ?></h1>
            <div class="contents_outer">
                <div class="contents">
                <?php
            }

            function layoutEnd()
            {
                ?>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
            }
