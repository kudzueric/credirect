<?php

class Redirect extends AppModel {
	public $validate = array (
		'redirect_key' => array ( 
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Redirect key is required'
            ),
			'alphanumeric' => array(
				'rule' => 'alphanumeric',
				'required' => true,
				'message' => 'Letters and numbers only'
			),
			'between' => array(
				'rule' => array('between', 1, 50),
				'message' => 'Must be between 1 and 50 characters'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'This keys is already in use'
			)
		),
		'campaign' => array ( 
	        'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Campaign is required'
            ),
			'alphanumeric' => array(
				'rule' => '/^[a-z0-9\-]{1,50}$/',
				'required' => true,
				'message' => 'Lowercase letters, numbers and hyphen only'
			),
			'between' => array(
				'rule' => array('between', 1, 50),
				'message' => 'Must be between 1 and 50 characters'
			)
		),
		'source' => array ( 
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Source is required'
            ),
			'alphanumeric' => array(
				'rule' => '/^[a-z0-9\-]{1,50}$/',
				'required' => true,
				'message' => 'Lowercase letters, numbers and hyphen only'
			),
			'between' => array(
				'rule' => array('between', 1, 50),
				'message' => 'Must be between 1 and 50 characters'
			)
		),
		'medium' => array ( 
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Medium is required'
            ),
			'alphanumeric' => array(
				'rule' => '/^[a-z0-9\-]{1,50}$/',
				'required' => true,
				'message' => 'Lowercase letters, numbers and hyphen only'
			),
			'between' => array(
				'rule' => array('between', 1, 50),
				'message' => 'Must be between 1 and 50 characters'
			)
			)
		);
}
