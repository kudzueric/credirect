<?php 
// app/Model/User.php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
			'alphanumeric' => array(
				'rule' => 'alphanumeric',
				'required' => true,
				'message' => 'Letters and numbers only'
			),
			'between' => array(
				'rule' => array('between', 5, 15),
				'message' => 'Must be between 5 and 15 characters'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'This username is already in use'
			)
			
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
			'between' => array(
				'rule' => array('between', 8, 100),
				'message' => 'Must be at least 8 characters'
			)
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

	public function beforeSave($options = array()) {
    		if (isset($this->data[$this->alias]['password'])) {
        		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
   		 }		
    	return true;
	}
}
