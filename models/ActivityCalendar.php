<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 25.09.2019
 * Time: 21:45
 */

namespace app\models;


use \app\models\adapters\{CalendarList, CalendarItem};

class ActivityCalendar
{

    /**
     * @var CalendarList|null
     */
    public $calendar;

    public function __construct()
    {
        $this->fillCalendar();
    }

    public function fillCalendar()
    {
        $this->calendar = new CalendarList();
        $thisDate = new \DateTime(date("Y") . '-' . date("m") . '-01');
        for ($i = 1; $i <= 31; $i++) {
            $calendar = new CalendarItem();
            $calendar->setDay($thisDate->format("Y-m-d"));
            $this->calendar->addItem($calendar);
            $lastMonth = intval($thisDate->format("m"));
            $thisDate->modify("+1 day");
            if ($lastMonth != intval($thisDate->format("m"))) {
                break;
            }

        }
    }

}