<?php
use Phalcon\Tag,
	Phalcon\Mvc\Model\Criteria,
	Phalcon\Forms\Form,
	Phalcon\Forms\Element\Text,
	Phalcon\Forms\Element\Hidden;

class RennerController extends ControllerBase
{

    public function indexAction()
    {
		$this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Renner');
        parent::initialize();
    }

    /**
     * showing the details of the renners
     *
     */
    public function detailAction()
    {

    }

    /**
     * show a overview wih all renners
     */
    public function overviewAction()
    {

    }

    /**
     * add a new renner
     */
    public function addAction()
    {

    }


    /**
     * update a exisiting renner
     */
    public function updateAction()
    {

    }



    /**
     * Returns a Form object for Add/editing renners
     * @param string $entity
     * @param string $edit
     * @return Form
     */
    protected function getRennerForm($entity = null, $edit = false)
    {
    	$form = new Form($entity);
    	$form->add(new Hidden("id"));
    	$form->add(new Text("Voornaam", array(
    			"size" => 30,
    			"maxlength" => 45
    	)));
    	//email input
    	$form->add(new Text("Achternaam", array(
    			"size" => 30,
    			"maxlength" => 45
    	)));
    	$form->add(new Text("tussenvoegsel", array(
    			"size" => 8,
    			"maxlength" => 10
    	)));/*  */
    	$form->add(new Date("dob", array(
    			"size" => 21,
    			"maxlength" => 21
    	)));/*  */

    	return $form;
    }


}

