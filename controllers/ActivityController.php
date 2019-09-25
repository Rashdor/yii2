<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 22.09.2019
 * Time: 23:01
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\{ActivityCalendar, ActivityForm};

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            //'activities' => (new MyActivity())->getAllActivities(),
            'calendar' => (new ActivityCalendar())->calendar,
            'formModel' => new ActivityForm()
        ]);

    }

    public function actionSubmit()
    {
        $model = new ActivityForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            return $this->render('entry-confirm', ['model' => $model]);
        }

    }

    public function actionCreate()
    {
        return "Создание активности";
    }

}