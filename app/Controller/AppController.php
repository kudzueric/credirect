<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	protected function url ($redirect = null) {
		$url = "http://www.MarionStreetCheeseMarket.com/";
	
		if (!$redirect) {
			$url = $url . "?utm_source=" . 'none' . "&utm_medium=" . 'none' . "&utm_campaign=" . 'none';
		} else {
			if ($redirect['Redirect']['host'] == null) {
				$url = $url . $redirect['Redirect']['destination'].  "?utm_source=" . $redirect['Redirect']['source'] . "&utm_medium=" . $redirect['Redirect']['medium'] . "&utm_campaign=" . $redirect['Redirect']['campaign'];
			} else {
				$url = 'http://' . $redirect['Redirect']['host'] .'/' . $redirect['Redirect']['destination'].  "?utm_source=" . $redirect['Redirect']['source'] . "&utm_medium=" . $redirect['Redirect']['medium'] . "&utm_campaign=" . $redirect['Redirect']['campaign'];
			}
		}
		
		return $url;
	}
	
	protected function trackingUrl ($redirect = null) {
		$domain = "MarionStCheese.com";
		
		if (!$redirect) {
			$domain = "http://" . $domain; 
		} else {
			$domain = "http://" . $redirect['Redirect']['redirect_key'] . "." . $domain;
		}
		
		return $domain;
	
	}
	
	public $components = array(
		'Session',
		'Auth' => array(
		    'loginRedirect' => array('controller' => 'redirects', 'action' => 'index'),
		    'logoutRedirect' => array('controller' => 'redirects', 'action' => 'index')
		),
		'DebugKit.Toolbar'
	    );

}
