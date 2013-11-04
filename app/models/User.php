<?php

use Phalcon\Mvc\Model\Validator\Email;
use Phalcon\Mvc\Model\Validator\Uniqueness;

class User extends \Phalcon\Mvc\Model
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
    public $email;

    /**
     *
     * @var string
     */
    public $password;

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
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(new Email(
        	array(
            	"field"    => "email",
                "required" => true,
                "message"  => "E-mail adres is niet juist",
            )
        ));

        $this->validate(new Uniqueness(
        	array(
            	"field"    => "email",
                "message"  => "E-mail adres komt al voor in ons systeem",
            )
        ));

        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id',
            'email' => 'email',
            'password' => 'password',
            'voornaam' => 'voornaam',
            'achternaam' => 'achternaam'
        );
    }

}
