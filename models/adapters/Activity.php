<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 22.09.2019
 * Time: 23:44
 */

namespace app\models\adapters;

use yii\base\Model;

class Activity extends Model
{

    /**
     * Название события
     *
     * @var string
     */
    public $title;

    /**
     * День начала события. Хранится в Unix timestamp
     *
     * @var int
     */
    public $startDay;

    /**
     * День завершения события. Хранится в Unix timestamp
     *
     * @var int
     */
    public $endDay;

    /**
     * Имя автора
     *
     * @var int
     */
    public $author;

    /**
     * Описание события
     *
     * @var string
     */
    public $body;

    /**
     * Событие может повторяться
     *
     * @var bool
     */
    public $recurring = false;

    /**
     * Событие блокирует остальные
     *
     * @var bool
     */
    public $blocking = false;

    /**
     * @return array
     */
    public function attributeLabels() : array
    {
        return [
            'title' => 'Название события',
            'startDay' => 'Дата начала',
            'endDay' => 'Дата завершения',
            'author' => 'ID автора',
            'body' => 'Описание события',
            'recurring' => 'Повторяется?',
            'blocking' => 'Блокирует остальные',
        ];
    }
}