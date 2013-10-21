<?php
App::uses('AppModel', 'Model');
/**
 * ProductsFeature Model
 *
 * @property Product $Product
 */
class ProductsFeature extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
    //Validate
    public $validate = array(
        'language_id' => array (
            'rule'    => 'notEmpty',
            'message' => 'You must select a language'
        ),
        'product_id' => array (
            'rule'    => 'notEmpty',
            'message' => 'You must select a Product'
        ),
        'title' => array(
            'rule'    => 'notEmpty',
            'message' => 'You must enter a title'
        ),
        'text' => array(
            'rule'    => 'notEmpty',
            'message' => 'You must enter text for this product feature'
        ),
        'link' => array(
            'rule'    => 'notEmpty',
            'message' => 'You must enter a link to be used as the anchor'
        ),
        'position' => array(
            'rule'    => 'notEmpty',
            'message' => 'You must select a location for the image'
        )
    );
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
