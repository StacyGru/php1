<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-6. Использование форм для передачи данных в программу РНР.  
Тест математических знаний.</title>
        <meta charset="utf-8">
        <style>
            <?php
            require "style.css";
            ?>
            </style>
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        </head>
    <body>
        <header>
            <img src="img/logo.png" alt="logo">
            <h1>Грушевская Анастасия Сергеевна, 191-321.<br>
                <u>Лабораторная работа №А-6. Использование форм для передачи данных в программу РНР. Тест математических знаний.</u><br>
            </header>

        <main>

            <?php
            if (isset($_POST['form'])) // если в форму были введены данные
            {
                switch ($_POST['case'])
                {
                    case 'case1':   // площадь треугольника
                        $p = ($_POST['A'] + $_POST['B'] + $_POST['C'])/2;
                        $result = sqrt($p*($p - $_POST['A'])*($p - $_POST['B'])*($p - $_POST['C']));
                        break;
                    case 'case2': // периметр треугольника
                        $result = $_POST['A'] + $_POST['B'] + $_POST['C'];
                        break;
                    case 'case3': // объём параллелепипеда
                        $result = $_POST['A'] * $_POST['B'] * $_POST['C'];
                        break;
                    case 'case4':   // среднее арифметическое
                        $result = round(($_POST['A'] + $_POST['B'] + $_POST['C'])/3, 2);
                        break;
                    case 'case5':   // квадрат суммы
                        $result = pow($_POST['A'] + $_POST['B'] + $_POST['C'], 2);
                        break;
                    case 'case6':   // сумма квадратов
                        $result = pow($_POST['A'], 2) + pow($_POST['B'], 2) + pow($_POST['C'], 2);
                        break;
                }
            }

            if (isset($result))
            {
                $out_text = 'ФИО: '.$_POST['name'].'<br>'; //  если результат есть, то сохраняем отчёт в переменную
                $out_text .= 'Номер группы: '.$_POST['group'].'<br>';
                
                if (isset($_POST['about']))
                    $out_text .= '<br>'.$_POST['about'].'<br>';
                
                $out_text .= 'Решаемая задача: ';
                switch ($_POST['case'])
                {
                    case 'case1':
                        $out_text .= 'площадь треугольника';
                        break;
                    case 'case2': 
                        $out_text .= 'периметр треугольника';
                        break;
                    case 'case3': 
                        $out_text .= 'объём параллелепипеда';
                        break;
                    case 'case4':   
                        $out_text .= 'среднее арифметическое';
                        break;
                    case 'case5':   
                        $out_text .= 'квадрат суммы';
                        break;
                    case 'case6':   
                        $out_text .= 'сумма квадратов';
                        break;
                }
                
                if ($result == $_POST['answer'])
                    $out_text .= '<br><br><b style="color: green;">Поздравляем, ваш ответ правильный, тест пройден!</b><br>';
                else
                    $out_text .= '<br><br><b style="color: red;">К сожалению ваш ответ неверный, тест не пройден.</b><br>';

                echo $out_text; // выводим отчёт в браузере

                if (array_key_exists('send_e-mail', $_POST))    // если отчёт нужно отправить на почту
                {
                    mail($_POST['e-mail'], 'Результат тестирования',
                        str_replace('<br>', "\r\n", $out_text),  // преобразование <br> на "язык" e-mail
                        "From: auto@mami.ru\n"."Content-type: text/plain; charset=utf-8\n");
                        echo '<i>Результаты теста были автоматически отправлены на ваш e-mail</i>';
                }
            }
            else
            {
                echo    // если результата нет, то выводим форму
                '<form name="form" method="post" action="/lab6/index.php">
                <label for="name">ФИО<span style="color: red;"> *</span></label> <input type="text" id="name" name="name"></input><br>
                <label for="group">Номер группы<span style="color: red;"> *</span></label> <input type="text" id="group" name="group"></input><br>
                <label for="value_A">Значение A<span style="color: red;"> *</span></label> <input type="text" id="value_A" name="A"></input><br>
                <label for="value_B">Значение B<span style="color: red;"> *</span></label> <input type="text" id="value_B" name="B"></input><br>
                <label for="value_C">Значение C<span style="color: red;"> *</span></label> <input type="text" id="value_C" name="C"></input><br>
                <label for="answer">Ваш ответ<span style="color: red;"> *</span></label> <input type="text" id="answer" name="answer"> </input><br>
                <label for="e-mail">Ваш e-mail</label> <input type="e-mail" id="e-mail" name="e-mail"></input><br>

                <label for="about">Немного о себе</label> <textarea id="about"></textarea><br>
                <br>

                <div class="select">
                <input checked="checked" type="radio" style="margin-right: 5px;" id="case1" value="case1" name="case"></input> <label for="case1">Площадь треугольника</label><br>
                <input type="radio" style="margin-right: 5px;" id="case2" value="case2" name="case"></input> <label for="case2">Периметр треугольника</label><br>
                <input type="radio" style="margin-right: 5px;" id="case3" value="case3" name="case"></input> <label for="case3">Объём параллелепипеда</label><br>
                <input type="radio" style="margin-right: 5px;" id="case4" value="case4" name="case"></input> <label for="case4">Среднее арифметическое</label><br>
                <input type="radio" style="margin-right: 5px;" id="case5" value="case5" name="case"></input> <label for="case5">Квадрат суммы</label><br>
                <input type="radio" style="margin-right: 5px;" id="case6" value="case6" name="case"></input> <label for="case6">Сумма квадратов</label><br>
                    </div>
                <br>

                <input type="checkbox" style="margin-right: 5px;" id="send_e-mail" name="send_e-mail"> <label for="send_e-mail" style="float: unset;">Отправить результат теста по e-mail</label><br>
                <br>

                <input type="radio"  style="margin-right: 5px;" id="browser" name="version"></input> <label for="browser" style="float: unset;">Версия для просмотра в браузере</label><br>
                <input type="radio"  style="margin-right: 5px;" id="print" name="version"></input> <label for="print" style="float: unset;">Версия для печати</label><br>
                <br>

                <input type="submit" id="check" value="Проверить" name="form"></input>
                    </form>';
            }
            ?>
            
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>