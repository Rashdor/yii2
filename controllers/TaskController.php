<?php

namespace app\controllers;

use yii\web\Controller;

class TaskController extends Controller
{

    /**
     *
     * @return string
     */
    public function actionIndex() : string
    {
        echo 'Main';
        exit();
    }

    /**
     *
     * @return string
     */
    public function actionTask() : string
    {
        return $this->render('task');
    }
}
