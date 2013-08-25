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
