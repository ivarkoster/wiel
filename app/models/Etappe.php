<?php


class Etappe extends \Phalcon\Mvc\Model
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
    public $koers_id;
     
    /**
     *
     * @var integer
     */
    public $etappeType_id;
     
    /**
     *
     * @var string
     */
    public $naam;
     
    /**
     *
     * @var string
     */
    public $prefix;
     
    /**
     *
     * @var string
     */
    public $startDate;
     
    /**
     *
     * @var string
     */
    public $startPlaats;
     
    /**
     *
     * @var string
     */
    public $finishPlaats;
     
}
