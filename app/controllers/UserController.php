<?php

use Phalcon\Tag,
	Phalcon\Mvc\Model\Criteria,
	Phalcon\Forms\Form,
	Phalcon\Forms\Element\Password,
	Phalcon\Forms\Element\Text,
	Phalcon\Forms\Element\Hidden;

class UserController extends \Phalcon\Mvc\Controller
{

	/**
	 * this runs at all actions in the User Controller
	 */
	public function initialize()
	{
		$this->view->setTemplateAfter('main');
		Tag::setTitle('User');
	}

    /**
     * user/index action
     */
    public function indexAction()
    {
		$this->view->form = $this->getLoginForm();
    }

    /**
     *
     */
    public function registerAction()
    {

        if ($this->request->isPost()) {
	        $voornaam       = $this->request->getPost('voornaam');
	        $achternaam     = $this->request->getPost('achternaam');
	        $email          = $this->request->getPost('email');
	        $password       = $this->request->getPost('password1');
	        $repeatPassword = $this->request->getPost('password2');

			//check if user bypassed the javascript validation and validate the input again
	        if (empty($voornaam) || empty($achternaam) || empty($email) || empty($password)
	        	|| $password != $repeatPassword || strlen($password) < 3
	        ) {
	        	$this->flash->error(
	        		"Formulier is niet correct ingevuld. Zorg ervoor dat uw browser Javascript ondersteunt als u de
	        		specifieke foutmeldingen wil zien."
	        	);
	        	return false;
	        }

	        //probeer de gebruiker toe te vopegen in de database
	        $user = new User();
	        $user->voornaam   = $voornaam;
	        $user->achternaam = $achternaam;
	        $user->email      = $email;
	        $user->password   = md5($password);
	        if ($user->save() == false) {
	        	foreach ($user->getMessages() as $message) {
	        		$this->flash->error((string) $message);
	        	}
	        } else {
	        	Tag::setDefault('email', 'iets');
	        	Tag::setDefault('password', '');
	        	$this->flash->success('Hoera! je bent aangemeld.');
	        	return $this->dispatcher->forward(array(
        			'controller' => 'user',
        			'action'     => 'index',
		        ));
	        }

        }
    }

    public function logoutAction()
    {
		$this->session->remove('auth');
        $this->flash->success('Vaarwel!');
        return $this->dispatcher->forward(array(
        	'controller' => 'index',
        	'action'     => 'index',
        ));
    }

    /**
     * handle all login requests
     */
    public function loginAction()
    {
		if ($this->request->isPost()) {
			//try to find a user with the given login credentials
			$email    = $this->request->getPost('email');
			$password = md5($this->request->getPost('password'));
			$user = new User();
			$user = User::find( array(
				'email'    => $email,
				'password' => $password
			));
			if ($user != false) {
				$this->_registerUser($user);
				$this->flash->success('Je bent nu ingelogd!');
	        	return $this->dispatcher->forward(array(
	        		'controller' => 'index',
	        		'action'     => 'index',
	        	));
	        //user not found
			} else {
				$this->flash->warning('Inloggen mislukt');
			}
		}
		//login mislukt, opnieuw naar loginform doorsturen
		return $this->dispatcher->forward(array(
        	'controller' => 'user',
        	'action'     => 'index',
        ));
    }

    /**
     * set the user data into the session so we know the user is currently logged in
     * @param $user
     */
    protected function _registerUser($user)
    {
		$this->session->set('auth', array(
            'id'    => $user->id,
            'email' => $user->email,
        ));
    }


    /**
     * Returns a Form object for logging on te application
     * @param string $entity
     * @param string $edit
     * @return Form
     */
    protected function getLoginForm($entity = null, $edit = false)
    {
    	$form = new Form($entity);
		$form->add(new Hidden("id"));
    	$form->add(new Text("username", array(
    		"size"      => 24,
    		"maxlength" => 70
    	)));
		//email input
    	$form->add(new Text("email", array(
    		"size"      => 10,
    		"maxlength" => 30
    	)));
    	$form->add(new Password("password", array(
    		"size"      => 10,
    		"maxlength" => 30
    	)));/*  */

    	return $form;
    }




}

