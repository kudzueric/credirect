<?php

class Redirect extends AppModel {
	public $validate = array (
		'name' => array ( 'rule' => 'notEmpty'),
		'campaign' => array ( 'rule' => 'notEmpty'),
		'source' => array ( 'rule' => 'notEmpty'),
		'medium' => array ( 'rule' => 'notEmpty')
		);
}
