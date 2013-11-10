<?php
App::uses('AppModel', 'Model');
/**
 * Highresolution Model
 *
 * @property Product $Product
 */
class Highresolution extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'highresolution';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'short_description';


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
