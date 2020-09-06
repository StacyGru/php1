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
            <?php
            if (!isset($_GET['clicks']))
                echo '<img src="../lab3/img/logo.png" alt="logo">';
            else
                echo '<img src="../img/logo.png" alt="logo">';
            ?>
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-3. Использование GET-параметров в ссылках. Виртуальная клавиатура.</u></h1>
            </header>

        <main>

            <div class="container">

                <div class="item window">
                <?php                                                                                                                                                              
                    if (!isset($_GET['clicks']))
                        $_GET['clicks'] = 0;
                    else
                        $_GET['clicks']++;
                   
                    if (!isset($_GET['store']))
                        $_GET['store'] = '';   
                        
                    $clicks = 0;
                
                    if (isset($_GET['key']))                                                                                                                
                        $_GET['store'] .= $_GET['key'];      
                    
                    echo $_GET['store'];                                                                             
                    ?>                                                                                                                                    
                    </div>
                <a class="item num" href="/lab3/index.php/?key=1&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">1</a>
                <a class="item num" href="/lab3/index.php/?key=2&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">2</a>
                <a class="item num" href="/lab3/index.php/?key=3&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">3</a>
                <a class="item num" href="/lab3/index.php/?key=4&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">4</a>
                <a class="item num" href="/lab3/index.php/?key=5&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">5</a>
                <a class="item num" href="/lab3/index.php/?key=6&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">6</a>
                <a class="item num" href="/lab3/index.php/?key=7&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">7</a>
                <a class="item num" href="/lab3/index.php/?key=8&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">8</a>
                <a class="item num" href="/lab3/index.php/?key=9&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">9</a>
                <a class="item num" href="/lab3/index.php/?key=0&store=<?php echo $_GET['store']; ?>&clicks=<?php echo $_GET['clicks']; ?>">0</a>
                <a class="item reset" href="/lab3/index.php/?clicks=<?php echo $_GET['clicks']; ?>">СБРОС</a>
                
                </div>
                
            </main>

        <footer>
            <?php
            echo 'Количество нажатий кнопок: '.$_GET['clicks'];
            ?>
            </footer>
        </body>
    </html>