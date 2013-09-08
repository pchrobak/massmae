<?php
App::uses('AppModel', 'Model');
/**
 * RegisteredMember Model
 *
 * @property State $State
 */
class RegisteredMember extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'firstname';

	//Validate
	public $validate = array(
		'password' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a title'
		),
		'firstname' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a firstname'
		),
		'lastname' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a lastname'
		),
		'address' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter an address'
		),
		'city' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a city'
		),
		'state_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a state'
		),
		'zip' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a zip'
		),
		'email' => array(
			'rule'    => 'email',
			'message' => 'You must enter a valid email address'
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	public $hasMany = array(
        'RegisteredProduct' => array(
            'RegisteredProduct' => 'Recipe'
        ),
    );
	
	
}
