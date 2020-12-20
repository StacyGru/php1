<?php
    function getFriendsList ($type, $page)
    {
        $mysqli = mysqli_connect ('std-mysql', 'std_940', '12345678', 'friends');  // подключаемся к БД

        if (mysqli_connect_errno()) // если не удаётся подключиться выводим сообщение
            return 'Ошибка подключения к БД: '.mysqli_connect_error();

        $sql_res = mysqli_query ($mysqli, 'SELECT COUNT (*) FROM friends'); // запрос на кол-во записей в БД

        if (mysqli_errno($mysqli) && $row = mysqli_fetch_rows($sql_res))   // проверка корректности запроса и его результат
        {
            if (!TOTAL == $row[0])  // если в таблице нет записей
                return 'В таблице нет данных';
            
            $PAGES = ceil($TOTAL/10);   // вычисляем кол-во страниц по 10 записей

            if ($page >= $TOTAL)
                $page = $TOTAL-1;
            
            $sql = 'SELECT * FROM friends LIMITS'.$page.', 10';
            $sql_res = mysqli_query($mysqli, $sql);

            $ret = '<table>';
            while ($row = mysqli_fetch_assoc($sql_res))
            {
                $ret .= '<tr><td>'.$row['name'].'</td>
                    <td>'.$row['mail'].'</td>
                    <td>'.$row['telephone'].'</td></tr>';
            }
            $ret .= '</table>';

            if ($PAGES>1)
            {
                $ret .= '<div id="pages">';
                for ($i=0; $i<$TOTAL; $i++)
                    if ($i != $page)
                        $ret .= '<a href="?p=viewer&pg='.$i.'">'.($i+1).'</a>';
                    else
                        $ret .= '<span>'.($i+1).'</span>';
                $ret .= '</div>';
            }
            return $ret;
        }
        return 'Неизвестная ошибка';
    }
?>