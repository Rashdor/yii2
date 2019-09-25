<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 25.09.2019
 * Time: 21:54
 */

namespace app\models\adapters;


use yii\base\Model;

class CalendarItem extends Model
{

    public $day = null;

    public function setDay($value)
    {
        $date = new \DateTimeImmutable($value);
        $this->day = $date;
    }

    /**
     * @return array
     */
    public function attributeLabels() : array
    {
        return [
            'day' => 'Дата события',
        ];
    }
}