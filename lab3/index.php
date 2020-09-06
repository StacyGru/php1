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
                <?php                                                                                           

                    $STORE = '';        // каждый раз в начале мы очищаем хранилище, а после присваиваем ему значение из параметра 'store', которое ссылается на последнее выведенное значение хранилища (а в случае если это первая загрузка страницы, то никакое значение параметра не было передано, следовательно в хранилище ничего не записывается и оно остаётся пустым)
                                                                                                                
                    if (isset($_GET['store']))  // отвечает за сохранение введённых ранее значений             // значение 'store' по сути не меняется когда мы нажимаем другую кнопку, так как оно для всех кнопок одинаковое и ссылается на строчку 'echo $STORE;' (т.е. позволяет сохранить значение которое мы вывели в предыдущий раз)
                        $STORE = $_GET['store']; /* $STORE = <?php echo $STORE; ?>                             
                                                        echo $STORE; =>  <?php echo $STORE; ?> =>  */           

                    if (isset($_GET['key']))                                                                   
                    {                                                                                           
                        if (isset($_GET['key']) == 'reset')                                                     
                                $STORE = '';                                                                    
                            else                                                                                
                                $STORE .= $_GET['key']; /* $STORE = <?php echo $STORE; ?>.$_GET['key']   */       
                    }
                    echo $STORE;                                                                             
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