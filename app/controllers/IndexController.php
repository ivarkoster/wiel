<?php

class IndexController extends ControllerBase
{

	public function indexAction()
	{
		$this->view->setTemplateAfter('main-intro');
		Phalcon\Tag::setTitle('Start');
		parent::initialize();
	}

}

