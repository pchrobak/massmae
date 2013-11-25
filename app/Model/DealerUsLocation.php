<?php
App::uses('AppModel', 'Model');
/**
 * DealerUsLocation Model
 *
 * @property State $State
 */
class DealerUsLocation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'company_name';

//Validate
	public $validate = array(
		'company_name' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a company name'
		),
		'address1' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter an address'
		),
		'city' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a city'
		),
		'state_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a state'
		),
		'zip' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a zip or postal code'
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
}
