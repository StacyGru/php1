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
                
                
                function outTable($structure)   // функция вывода таблицы
                {                    
                    $tr = explode('#', $structure);    // разбиение структуры таблицы на СТРОКИ (#) и создание массива, содержащего эти СТРОКИ

                    $table = '';    // переменная для итогового HTML-кода таблицы
                    for ($i=0; $i<count($tr); $i++)    // считаем количество СТРОК таблицы (количество элементов в заданном выше массиве)
                        $table .= getTR($tr[$i]);  // для каждой СТРОКИ таблицы (они записаны в массив и подсчитано их количество) вызывается функция getTR

                    if ($table)
                    {
                        echo '<h2>Таблица №'.'</h2>';
                        echo '<table>'.$table.'</table>';
                    }
                    else
                        echo 'В таблице нет строк';
                }

                function getTR($tr)  // функция возвращает (не выводит!) СТРОКИ таблицы
                {
                    $td = explode('*', $tr);    // разбиение структуры таблицы на ЯЧЕЙКИ (*) и элементы массива, * это разделитель
                    $return = '<tr>';

                    for ($i=0; $i<count($td); $i++)
                        $return .= '<td>'.$td[$i].'</td>';

                    return $return.'</tr>';    // завершение выполнения функции, возврат к строке в которой была вызвана данная функция
                }

                $structure = array('C1*C2*C3#C4*C5*C6', 'C7*C8*C9#C10*C11*C12', 
                'C13*C14*C15#C16*C17*C18', '');   // массив со структурами таблиц

                for ($num=0; $num<count($structure); $num++)  // вызов функции вывода таблицы (столько раз, сколько элементов в массиве со структурами таблиц)
                    outTable($structure[$num]);
            ?>
            </main>

        <footer>
            Подвал
            </footer>
        </body>
    </html>