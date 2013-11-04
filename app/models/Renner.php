<?php


class Renner extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $voornaam;
     
    /**
     *
     * @var string
     */
    public $achternaam;
     
    /**
     *
     * @var string
     */
    public $tussenvoegsel;
     
    /**
     *
     * @var string
     */
    public $dob;
     
    /**
     *
     * @var integer
     */
    public $klimmen;
     
    /**
     *
     * @var integer
     */
    public $sprinten;
     
    /**
     *
     * @var integer
     */
    public $ontsnappen;
     
    /**
     *
     * @var integer
     */
    public $tijdrijden;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'voornaam' => 'voornaam', 
            'achternaam' => 'achternaam', 
            'tussenvoegsel' => 'tussenvoegsel', 
            'dob' => 'dob', 
            'klimmen' => 'klimmen', 
            'sprinten' => 'sprinten', 
            'ontsnappen' => 'ontsnappen', 
            'tijdrijden' => 'tijdrijden'
        );
    }

}
