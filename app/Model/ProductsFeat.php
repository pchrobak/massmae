<?php
App::uses('AppModel', 'Model');
/**
 * ProductsFeat Model
 *
 * @property ProductFeature $ProductFeature
 */
class ProductsFeat extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ProductFeature' => array(
			'className' => 'ProductsFeatures',
			'foreignKey' => 'product_feature_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
