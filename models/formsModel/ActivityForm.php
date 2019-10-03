<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 25.09.2019
 * Time: 23:13
 */

namespace app\models\formsModel;


use yii\base\Model;

class ActivityForm extends Model
{
    public $date;
    public $messageActivity;

    public function rules()
    {
        return [
            [['date', 'messageActivity'], 'required']
        ];
    }
}