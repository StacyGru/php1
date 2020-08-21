<!DOCTYPE html>
<html>
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-1. Простейшая программа на PHP. Конвертация статического контента в динамический.</title>
        <meta charset="utf-8">
        <link href="css/style3.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
        </head>
    <body>
        <header>
            <ul>
                <li><a href="<?php

                    $name='Главная';
                    $link-'index1.php';
                    $current_page=false;

                    echo $link;

                ?>"<?php

                    if ($current_page)
                        echo 'class="current"';

                    echo '>';
                    echo $name;
                ?></a>
                    </li>
                <li><a href="<?php

                    $name='Виды суккулентов';
                    $link-'index2.php';
                    $current_page=true;

                    echo $link;

                ?>"<?php

                    if ($current_page)
                        echo 'class="current"';

                    echo '>';
                    echo $name;
                ?></a>
                    </li>
                <li><a href="<?php

                    $name='Уход за суккулентам';
                    $link-'index3.php';
                    $current_page=false;

                    echo $link;

                ?>"<?php

                    if ($current_page)
                        echo 'class="current"';

                    echo '>';
                    echo $name;
                ?></a>
                    </li>
                </ul>
            </header>
        <div class="content">
            <h1>Уход за суккулентами</h1>
            </div>
        <footer>
            <p style="line-height: unset;">Суккуленты — доступное домашнее растение для каждого!</p>
            </footer>
        </body>
    </html>