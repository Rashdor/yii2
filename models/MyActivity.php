<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 22.09.2019
 * Time: 23:04
 */

namespace app\models;

use app\models\adapters\{Activity, ActivitiesList, MyDay};

class MyActivity
{

    public function getAllActivities() : ActivitiesList
    {
        $result = new ActivitiesList();
        $activities = \Yii::$app->activities->getActivities();
        if (is_countable($activities) && count($activities)) {
            foreach ($activities as $act) {
                if (key_exists('startDay', $act)) {
                    $act['startDay'] = (new MyDay($act['startDay']));
                } else {
                    $act['startDay'] = (new MyDay(''));
                }
                if (key_exists('endDay', $act)) {
                    $act['endDay'] = (new MyDay($act['endDay']));
                } else {
                    $act['endDay'] = (new MyDay(''));
                }
                $result->addItem((new Activity($act)));
            }
        }
        return $result;
    }
}