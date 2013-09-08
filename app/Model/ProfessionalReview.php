<?php
App::uses('AppModel', 'Model');
/**
 * ProfessionalReview Model
 *
 * @property Product $Product
 */
class ProfessionalReview extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'publication';

//Validate
	public $validate = array(
		'product_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a product'
		),
		'author' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter and author'
		),
		'publication' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter the publication'
		),
		'pull_quote' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must a pull quote'
		)
	);
	
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
