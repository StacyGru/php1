<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-3. Использование GET-параметров в ссылках. Виртуальная клавиатура.</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <style>
            <?php
            require "style.css";
            ?>
            </style>
        </head>
    <body>
        <header>
            <img src="img/logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-3. Использование GET-параметров в ссылках. Виртуальная клавиатура.</u></h1>
            </header>

        <main>

            <div class="container">

                <div class="item window">
                    <?php
                        if (!isset($_GET['key']))
                        {
                            if ($_GET['key']=='reset')
                                $STORE = '';
                            else
                                $STORE .= $_GET['key'];
                        }
                        else
                            $STORE = '';

                        echo $STORE;
                    ?>
                    </div>
                <a class="item num" href="/lab3/index.php/?key=1">1</a>
                <a class="item num" href="/lab3/index.php/?key=2">2</a>
                <a class="item num" href="/lab3/index.php/?key=3">3</a>
                <a class="item num" href="/lab3/index.php/?key=4">4</a>
                <a class="item num" href="/lab3/index.php/?key=5">5</a>
                <a class="item num" href="/lab3/index.php/?key=6">6</a>
                <a class="item num" href="/lab3/index.php/?key=7">7</a>
                <a class="item num" href="/lab3/index.php/?key=8">8</a>
                <a class="item num" href="/lab3/index.php/?key=9">9</a>
                <a class="item num" href="/lab3/index.php/?key=0">0</a>
                <a class="item reset" href="/lab3/index.php/?key=Y">СБРОС</a>
                
                </div>
                
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>