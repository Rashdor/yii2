<?php
namespace app\widgets;

use Yii;


class LastPage extends \yii\bootstrap\Widget
{

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $session = Yii::$app->session;
        echo (($session->has('lastpage'))) ? 'Предыдущая страница: ' . $session['lastpage'] : '';
        $session->set('lastpage', $_SERVER['REQUEST_URI']);
    }
}
