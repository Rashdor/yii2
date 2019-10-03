<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 22.09.2019
 * Time: 23:49
 */

namespace app\models\adapters;

use Countable;
use Iterator;

class CalendarList implements Countable, Iterator
{

    /** @var CalendarItem[] positions */
    public $items = [];

    /** @var int $counter */
    public $counter;

    public function addItem(CalendarItem $item)
    {
        $this->items[] = $item;
    }

    public function count()
    {

        return count($this->items);
    }

    public function current()
    {
        return $this->items[$this->counter];
    }

    public function key()
    {
        return $this->counter;
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    public function valid()
    {
        return isset($this->items[$this->counter]);
    }
}