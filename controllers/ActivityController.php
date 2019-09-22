<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 22.09.2019
 * Time: 23:01
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\MyActivity;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'activities' => (new MyActivity())->getAllActivities(),
        ]);

    }

    public function actionCreate()
    {
        return "Создание активности";
    }

}