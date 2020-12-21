<?php
    function getFriendsList ($type, $page)
    {
        $mysqli = mysqli_connect ('localhost', 'root', '', 'friends');  // подключаемся к БД
        // $mysqli(подключение к БД) - переменная с данными для подключения к БД
        
        if (mysqli_connect_errno()) // если не удаётся подключиться выводим сообщение
            return 'Ошибка подключения к БД: '.mysqli_connect_error();

        $sql_res = mysqli_query($mysqli, "SELECT COUNT(*) FROM friends;"); // запрос на кол-во записей в БД
        // $sql_res(кол-во записей в БД) - переменная, значение которой это результат функции mysqli_query с 2-мя параметрами - данными для подключения к БД и самим запросом
        
        if (!mysqli_errno($mysqli))   // проверка корректности запроса и его результат
        {
            $row = mysqli_fetch_row($sql_res);
            $TOTAL = $row[0];
            if ($TOTAL == 0)  // если в таблице нет записей
                return 'В таблице нет данных';
            
            $PAGES = ceil($TOTAL/10);   // вычисляем кол-во страниц по 10 записей

            if ($page > $TOTAL)    // если указанная страница больше максимальной то выводим последнюю
                $page = $TOTAL-1;
            
            if ($type == 'by_id')
                $sql = 'SELECT * FROM friends LIMIT '.(($page)*10).', '.(($page+1)*10).';'; // выборка записей из БД, сортировка по id
            else
                $sql = 'SELECT * FROM friends ORDER BY surname LIMIT '.(($page)*10).', '.(($page+1)*10).';'; // выборка записей из БД, сортировка по фамилии
                                                    //  НЕ РАБОТАЛО ПОТОМУ ЧТО БЫЛ НЕПРАВИЛЬНЫЙ ЗАПРОС, Я УБРАЛА ЧАСТИ С LIMIT, ИХ НАДО БУДЕТ ДОБАВИТЬ В ПРАВИЛЬНОМ ВИДЕ
            $sql_res = mysqli_query($mysqli, $sql);

            $ret = '<table rules="all">';   // начало таблицы БД
            $ret .= '<tr><th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Пол</th>
                <th>Дата рождения</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Электронная почта</th>
                <th>Комментарий</th></tr>';
            
            // link = mysqli
            // sql = sql
            // result = sql_res
            // user =? res (не исп. пер/масс)

            while ($row = mysqli_fetch_assoc($sql_res)) // пока есть записи
            {                                           // выводим каждую запись как строку таблицы
                $ret .= '<tr><td>'.$row['surname'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['second_name'].'</td>
                    <td>'.$row['sex'].'</td>
                    <td>'.$row['date_of_birth'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['e-mail'].'</td>
                    <td>'.$row['note'].'</td></tr>';   // ДОПИСАТЬ
            }
            $ret .= '</table>'; // конец таблицы

            if ($PAGES>1)   // добавление пагинации если страниц больше 1
            {
                $ret .= '<br><div id="pages">';
                for ($i=0; $i<$PAGES; $i++) // цикл для выведения ссылок на все страницы пагинации
                    if ($i != $page)
                    {
                        $ret .= '<a href="?p=viewer&pg='.$i.''; // если это НЕ текущая страница то отобразить как ссылку
                        if ($type == 'by_surname')
                            $ret .= '&sort=by_surname';
                        $ret .= '">'.($i+1).'</a>';
                    }
                    else
                        $ret .= '<span>'.($i+1).'</span>';  // если это текущая страница то отобразить как обычный текст
                $ret .= '</div>';
            }
            return $ret;    // возвращение сформированного контента
        }
        return 'Неизвестная ошибка';    // если запрос некорректный то вывести ошибку
    }
?>