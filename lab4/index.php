<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Грушевская Анастасия Сергеевна, 191-321. Лабораторная работа №А-4. Пользовательские функции. Вывод таблиц.</title>
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
                <u>Лабораторная работа №А-4. Пользовательские функции. Вывод таблиц.</u></h1>
            </header>

        <main>
            <?php
                function getTR($data)  // функция вывода СТРОКИ таблицы (разбивает СТРОКИ таблицы на ячейки и формирует готовый HTML-код каждой строки)
                {
                    $arr = explode('*', $data);    // разбиение (explode) структуры на элементы массива, * это разделитель
                    $ret = '<tr>';

                    for ($i=0; $i<count($arr); $i++0)
                        $ret .= '<td>'.$arr[$i].'</td>';

                    return $ret.'</tr>';    // завершение выполнения функции, возврат к строке в которой была вызвана данная функция
                }

                $structure = 'C1*C2*C3#C4*C5*C6';   // структура таблицы

                $strings = explode('#', $structure);    // создание массива, содержащего строки таблицы

                $datas = '';    // переменная для итогового HTML-кода таблицы
                for ($i=0; $i<count($strings); $i++)    // считаем количество СТРОЧЕК таблицы
                    $datas .= getTR($strings[$i]);  // для каждой СТРОКИ таблицы (они записаны в массив и подсчитано их количество) вызывается функция getTR

                if ($datas)
                    echo '<table>'.$datas.'</table>';
                else
                    echo 'В таблице нет строк';
            ?>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>