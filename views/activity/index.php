<?php
use yii\helpers\{Html, Url};
use yii\widgets\ActiveForm;
?>

    <h1>События</h1>
<?php
if ($calendar instanceof app\models\adapters\CalendarList && count($calendar) > 0) {
?>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <?php
                $c = 1;
                foreach ($calendar as $day) {

                    echo '<td class="text-center">';
                    echo '<h1>' . $day->day->format("d.m") . '</h1>';
                    echo '<span class="btn btn-primary activity" data-day="' . $day->day->format("d.m.Y") . '" data-toggle="modal" data-target="#activityModal">Создать событие</span>';
                    echo '</td>';
                    if ($c % 5 == 0) {
                        echo '</tr><tr>';
                    }
                    ++$c;
                }
            ?>
        </tr>
        </tbody>
    </table>

    <div id="activityModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Новое событие</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin() ?>
                    <?= $form->action = Url::to(['activity/submit']); ?>
                    <?= $form->field($formModel, 'date')->hiddenInput() ?>
                    <?= $form->field($formModel, 'messageActivity')->textarea()->label('Текст задачи') ?>
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                    <?php ActiveForm::end() ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php
}
/*
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
*/
?>