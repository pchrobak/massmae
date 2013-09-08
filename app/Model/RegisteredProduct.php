<?php
App::uses('AppModel', 'Model');
/**
 * RegisteredProduct Model
 *
 * @property RegisteredMember $RegisteredMember
 * @property Product $Product
 */
class RegisteredProduct extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'registered_member_id';

//Validate
	public $validate = array(
		'registered_member_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a registered member'
		),
		'product_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a product'
		),
		'serial' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a serial number'
		),
		'dealer_name' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a dealer name'
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'RegisteredMember' => array(
			'className' => 'RegisteredMember',
			'foreignKey' => 'registered_member_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
