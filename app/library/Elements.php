<?php

use Phalcon\Tag;

/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Elements extends Phalcon\Mvc\User\Component
{
    private $_headerMenu = array(
        'navbar-left' => array(
            'index' => array(
                'caption' => 'Home',
                'action' => 'index'
            ),
            'invoices' => array(
                'caption' => 'Invoices',
                'action' => 'index'
            ),
            'about' => array(
                'caption' => 'About',
                'action' => 'index'
            ),
            'contact' => array(
                'caption' => 'Contact',
                'action' => 'index'
            ),
        	'Administratie' => array(
        		'Renners' => array(
                	'controller' => 'renner',
                	'action' => 'index'
	            ),
        		'Ploegen' => array(
                	'controller' => 'ploeg',
                	'action' => 'index'
	            ),
        		'Koersen' => array(
                	'controller' => 'koers',
                	'action' => 'index'
	            ),
        		'divider' => array (
        			'divider' => true,
        		),
        		'Gebruikers administratie' => array(
        			'controller' => 'user',
        			'action' => 'index'
        		),
        	),
        ),
        'navbar-right' => array(
            'user' => array(
                'caption' => 'Log In/Sign Up',
                'action' => 'index'
            ),
        )
    );


    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {

    	//check if ua user is logged on and show either login or logout link
		$auth = $this->session->get('auth');
        if ($auth) {
            $this->_headerMenu['navbar-right']['user'] = array(
                'caption' => 'Log Out',
                'action' => 'logout',
            );
        } else {
        //remove links that should only be visible for loggedin users
            unset($this->_headerMenu['navbar-left']['invoices']);
        }

        //get the currrent controller so we can set it active ibn the navbar
        $controllerName = $this->view->getControllerName();
        //make the navbar
        echo '<div class="navbar-collapse collapse">' . "\n";
        echo '<ul class="nav navbar-nav">' . "\n";
        foreach ($this->_headerMenu['navbar-left'] as $controller => $option) {

                if ($controllerName == $controller) {
                    echo '<li class="active">' . "\n";
                } else {
                    echo '<li>' . "\n";
                }

                //if this is not an item of a subMenu
                if (key_exists('caption', $option)) {
                	echo Phalcon\Tag::linkTo($controller.'/'.$option['action'], $option['caption']);

                	//this is a subMenu, loop through all items
                } else {

                	echo '<li class="dropdown">' . "\n";
                	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                	echo $controller;
                	echo '<b class="caret"></b></a>' . "\n";
                	echo '<ul class="dropdown-menu">' . "\n";
                	foreach ($option as $subCaption => $subController) {
                		//if current iteration is a divider then write it and go to next iterarion
                		if ($subController['divider'] === true) {
                			echo '<li class="divider"></li>' . "\n";
                			continue;
                		} elseif ($controllerName == $subController) {
                			echo '<li class="active">' . "\n";
                		} else {
                			echo '<li>' . "\n";
                		}
                		echo Phalcon\Tag::linkTo($subController['controller'].'/'.$subController['action'], $subCaption);
                		echo '</li>' . "\n";
                	}
                	echo '</ul>' . "\n";
                }

        }
        echo '</ul>' . "\n";

        echo '<ul class="nav navbar-nav  navbar-right">' . "\n";
        foreach ($this->_headerMenu['navbar-right'] as $controller=> $option) {
        	if ($controllerName == $controller) {
            	echo '<li class="active">' . "\n";
            } else {
            	echo '<li>' . "\n";
            }
            echo Tag::linkTo($controller.'/'.$option['action'], $option['caption']);
            echo '</li>' . "\n";
        }
        echo '</ul>' . "\n";
        echo '</div>' . "\n";
    }


}
