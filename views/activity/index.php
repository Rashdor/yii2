<h1>События</h1>
<?php
if ($activities instanceof app\models\adapters\ActivitiesList && count($activities) > 0) {
    echo '<ul style="list-style: none">';
    foreach ($activities as $act) {
        echo '<li>';
        echo '<b>' . $act->title . '</b>';
        echo '<br />';
        echo '<span>C ' . $act->startDay . ' по ' . $act->endDay . '</span>';
        echo '<br />';
        echo '<span><u>Содержание</u>: ' . $act->body . '</span>';
        echo '<br />';
        echo '<b>Задачу поставил: ' . $act->author . '</b>';
        echo '<br />';
        echo '<br />';
        echo '</li>';
    }
    echo '</ul>';
} else {
   echo '<strong>Запланированных событий нет</strong>';
}
