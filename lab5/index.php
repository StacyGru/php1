<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-5. Динамическое формирование контента и меню. Таблица умножения.</title>
        <meta charset="utf-8">
        <style>
            <?php
            require "style.css";
            ?>
            </style>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        </head>
    <body>
        <header>
            <img src="img/logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-5. Динамическое формирование контента и меню. Таблица умножения.</u><br></h1>
            <div class="main_menu">
                <?php

                echo '<a href="?html_type=TABLE"';  // начало кнопки "Табличная форма"
                if (array_key_exists ('html_type', $_GET) && $_GET['html_type'] == 'TABLE')
                    echo ' class="selected"';   // если был передан параметр html_type == "TABLE" то ссылка подсвечивается
                echo '>Табличная форма</a>';

                echo '<a href="?html_type=DIV"';    // начало кнопки "Блочная форма"
                if (array_key_exists ('html_type', $_GET) && $_GET['html_type'] == 'DIV')
                    echo ' class="selected"';   // если был передан параметр html_type == "DIV" то ссылка подсвечивается
                echo '>Блочная форма</a>';
                
                ?>
                </div>
            </header>

        <main>
            Основной блок
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>