<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 22.09.2019
 * Time: 23:25
 */
namespace app\components\activities;

use yii\base\Component;

class ActivityComponent extends Component
{
    private $activities = [];

    public function init(){
        parent::init();
        $this->setActivities();
    }

    public function getActivities() : array
    {
        return $this->activities;
    }

    private function setActivities()
    {
        $this->activities = [
            [
                'title' => 'Сделать домашнее задание №1',
                'startDay' => '2019-09-16',
                'endDay' => '2019-09-19',
                'author' => 'Тарас Голомозый',
                'body' => '<ul>
                    <li>1. Подготовьте виртуальную машину.</li>
                    <li>2. Разверните приложение на личной виртуальной машине.</li>
                    <li>3. Проверьте доступность приложения.</li>
                </ul>',
                'recurring' => false,
                'blocking' => false
            ],
            [
                'title' => 'Сделать домашнее задание №2',
                'startDay' => '2019-09-19',
                'endDay' => '2019-09-29',
                'author' => 'Тарас Голомозый',
                'body' => '<ul>
                    <li>1. Событие должно иметь больше свойств.</li>
                    <li>2. Помимо события нужна сущность «День». Он может быть рабочим и выходным, может иметь привязанные события. Реализуйте подобную сущность. Пока в виде кодовой заглушки.</li>
                    <li>3. * С помощью компонента сессий сохраняйте предыдущую посещённую пользователем страницу.</li>
                </ul>',
                'recurring' => false,
                'blocking' => false
            ],
            [
                'title' => 'Посетить третий вебинар',
                'startDay' => '2019-09-29',
                'endDay' => '2019-09-29',
                'author' => 'Станислав Гапонов',
                'body' => '<strong>Прослушать вебинар</strong>',
                'recurring' => true,
                'blocking' => true
            ],
        ];
    }

}