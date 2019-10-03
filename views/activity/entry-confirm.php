<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 25.09.2019
 * Time: 23:32
 */

use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Дата</label>: <?= Html::encode($model->date) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->messageActivity) ?></li>
</ul>