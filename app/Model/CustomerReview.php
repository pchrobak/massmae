<?php
App::uses('AppModel', 'Model');
/**
 * CustomerReview Model
 *
 * @property Product $Product
 */
class CustomerReview extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	//Validate
	public $validate = array(
		'product_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a product'
		),
		'email' => array(
			'rule'    => 'email',
			'message' => 'You must enter a valid email'
		),
		'rating' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a rating'
		),
		'title' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a title'
		),
		'review' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a review'
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
