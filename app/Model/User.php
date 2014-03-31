<?php

App::uses('Security', 'Utility');

class User extends AppModel{

	public $displayField = 'firstname';

	public $hasMany = array(
		'Show');

	public $validate = array(
		'firstname' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a first name.'
		),
		'surname' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a surname.'
		),
		'email' => array(
			'rule' => 'email',
			'message' => 'Please enter a valid email address.'
		),
		'password' => array(
			'rule' => array('between', 2, 10),
			'message' => 'Invalid password. Password must be between 2 and 10 characters long.'
		),
	);

	public function beforeSave( $options = array() ){

		$this->data['User']['password'] = Security::hash( $this->data['User']['password'], 'sha1', true );

		return true;

	}
	
}

?>