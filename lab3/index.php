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
            <img src="img\logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-3. Использование GET-параметров в ссылках. Виртуальная клавиатура.</u></h1>
            </header>

        <main>

            <div class="container">

                <div class="item window">
                <?php                                                                                           //  если ничего ещё не нажали          если нажали кнопку 1                                 теперь нажали кнопку 2                если нажали кнопку сброс

                    $STORE = '';                                                                                //  создаём пустое хранилище           создаём пустое хранилище                             опять пустое хранилище
                                                                                                                
                    if (isset($_GET['store']))  // отвечает за сохранение введённых ранее значений              //  условие не выполняется             условие выполняется                                  да
                        $STORE = $_GET['store']; /* $STORE = <?php echo $STORE; ?>                              //  (ни одна кнопка не нажата)         $STORE = <?php echo $STORE; ?>                       
                                                        echo $STORE; =>  <?php echo $STORE; ?> =>  */           

                    if (isset($_GET['key']))                                                                    //  условие не выполняется             условие выполняется
                    {                                                                                           //  (ни одна кнопка не нажата)
                        if (isset($_GET['key']) == 'reset')                                                     //                                     условие не выполняется
                                $STORE = '';                                                                    //                                     ...
                            else                                                                                //                                     тогда
                                $STORE .= $_GET['key']; /* $STORE = <?php echo $STORE; ?>.$_GET['key']          //                                     $STORE = <?php echo $STORE; ?>.$_GET['key']              */
                    }

                    echo $STORE;                                                                             /* //  $STORE == ''                       $STORE == <?php echo $STORE; ?>.$_GET['key']       */
                                                                                                                //  выведется ''                       выведется '1'         
                    ?>                                                                                                                                    
                    </div>
                <a class="item num" href="/lab3/index.php/?key=1&store=<?php echo $STORE; ?>">1</a>
                <a class="item num" href="/lab3/index.php/?key=2&store=<?php echo $STORE; ?>">2</a>
                <a class="item num" href="/lab3/index.php/?key=3&store=<?php echo $STORE; ?>">3</a>
                <a class="item num" href="/lab3/index.php/?key=4&store=<?php echo $STORE; ?>">4</a>
                <a class="item num" href="/lab3/index.php/?key=5&store=<?php echo $STORE; ?>">5</a>
                <a class="item num" href="/lab3/index.php/?key=6&store=<?php echo $STORE; ?>">6</a>
                <a class="item num" href="/lab3/index.php/?key=7&store=<?php echo $STORE; ?>">7</a>
                <a class="item num" href="/lab3/index.php/?key=8&store=<?php echo $STORE; ?>">8</a>
                <a class="item num" href="/lab3/index.php/?key=9&store=<?php echo $STORE; ?>">9</a>
                <a class="item num" href="/lab3/index.php/?key=0&store=<?php echo $STORE; ?>">0</a>
                <a class="item reset" href="/lab3/index.php/?key=reset&store=<?php echo $STORE; ?>">СБРОС</a>
                
                </div>
                
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>