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

                    // сначала content, потом html_type
                    // при первой загрузке - табличная вёрстка (но он не выделен!)
                    //                       вся таблица умножения (выделяется!)

                    echo '<a href="?html_type=TABLE';  // кнопка "Табличная форма"
                    if (isset($_GET['content']))   // добавляем параметр content (если он был задан)
                        echo '&content='.$_GET['content'];
                    echo '"';
                    if (array_key_exists ('html_type', $_GET) && $_GET['html_type'] == 'TABLE')
                        echo ' class="selected"';   // если был передан параметр html_type == "TABLE", то кнопка подсвечивается
                    echo '>Табличная форма</a>';

                    echo '<a href="?html_type=DIV';    // кнопка "Блочная форма"
                    if (isset($_GET['content']))   // добавляем параметр content (если он был задан)
                        echo '&content='.$_GET['content'];
                    echo '"';
                    if (array_key_exists ('html_type', $_GET) && $_GET['html_type'] == 'DIV')
                        echo ' class="selected"';   // если был передан параметр html_type == "DIV", то кнопка подсвечивается
                    echo '>Блочная форма</a>';
                
                ?>
                </div>
            </header>

        <main>
            <div class="product_menu">
                <?php

                    echo '<a href="'; // кнопка "Вся таблица умножения"
                    if (isset($_GET['html_type']))   // добавляем параметр html_type (если он был задан)
                        echo '?html_type='.$_GET['html_type'];
                    echo '"';
                    if (!isset($_GET['content']))   // если параметр content не был передан, то кнопка подсвечивается
                        echo ' class="selected"';
                    echo '>Вся таблица умножения</a><br>';

                    for ($i=2; $i<=9; $i++) // счётчик от 2 до 9
                    {
                        echo '<a href="?content='.$i; // значение параметра content == цифре на кнопке == значению счётчика
                        if (isset($_GET['html_type']))   // добавляем параметр html_type (если он был задан)
                            echo '&html_type='.$_GET['html_type'];
                        echo '" ';
                        if (isset ($_GET['content']) && $_GET['content']==$i)   // если переданное значение параметра content == значению счётчика, то кнопка подсвечивается 
                            echo ' class="selected"';
                        echo '>Таблица умножения на '.$i.'</a><br>';
                    }

                ?>
                </div>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>