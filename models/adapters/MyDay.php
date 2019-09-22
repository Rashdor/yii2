<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 23.09.2019
 * Time: 0:07
 */

namespace app\models\adapters;


class MyDay
{

    /**
     * @var bool|\DateTime|null
     */
    public $date = null;

    /**
     * Является ли выходным?
     *
     * @var null
     */
    public $weekend = null;

    public function __construct(string $date)
    {
        $this->date = \DateTime::createFromFormat('Y-m-d', $date);
    }

    public function getMyDay(string $format)
    {
        return ($this->date instanceof \DateTime) ? $return = $this->date->format($format) : '';
    }

    public function __toString()
    {
        return ($this->date instanceof \DateTime) ? $return = $this->date->format('d.m.Y') : '';
    }


}