<?php


class Koers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var integer
     */
    public $koerstype_id;
     
    /**
     *
     * @var integer
     */
    public $jaar;
     
    /**
     *
     * @var string
     */
    public $naam;
     
    /**
     *
     * @var string
     */
    public $startIinschrijf;
     
    /**
     *
     * @var string
     */
    public $eindinschrijf;
     
}
