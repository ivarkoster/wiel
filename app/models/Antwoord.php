<?php


class Antwoord extends \Phalcon\Mvc\Model
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
    public $speler_id;
     
    /**
     *
     * @var integer
     */
    public $extraVraag_id;
     
    /**
     *
     * @var string
     */
    public $antwoord;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'speler_id' => 'speler_id', 
            'extraVraag_id' => 'extraVraag_id', 
            'antwoord' => 'antwoord'
        );
    }

}
