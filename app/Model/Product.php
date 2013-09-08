<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Series $Series
 * @property Category $Category
 */
class Product extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
//Validation	
public $validate = array(
	'name' => array(
		'notEmpty' => array(
			'rule'     => 'notEmpty',
			'required' => true,
			'message'  => 'product name must be alphanumeric. No special characters are allowed'
		),
		'minLength' => array(
			'rule'    => array('minLength', '3'),
			'message' => 'Product Name must be at least 3 characters long'
		)
	),
	'series_id' => array (
		'rule'    => 'notEmpty',
        'message' => 'You must select a series'
    ),
	'quick_description' => array (
		'rule'    => 'notEmpty',
        'message' => 'Quick Description cannot be empty'
    ),
	'body_copy' => array (
		'rule'    => 'notEmpty',
        'message' => 'Body copy cannot be empty'
    ),
	'priced_per' => array (
		'rule'    => 'notEmpty',
        'message' => 'You must a unit of measure'
    ),
	'msrp_usd' => array (
		'rule'    => 'notEmpty',
        'message' => 'Product Price cannot be blank'
    )
);
	
//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Series' => array(
			'className' => 'Series',
			'foreignKey' => 'series_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
        'ProductsImagesSwatch' => array(
            'ProductsImagesSwatch' => 'Recipe',
        ),
		'ProductsImage' => array(
            'ProductsImage' => 'Recipe',
		)
    );
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Category' => array(
			'className' => 'Category',
			'joinTable' => 'products_categories',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'category_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Download' => array(
			'className' => 'Download',
			'joinTable' => 'products_downloads',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'download_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Faq' => array(
			'className' => 'Faq',
			'joinTable' => 'products_faqs',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'faq_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Ingredient' => array(
			'className' => 'Product',
			'joinTable' => 'products_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'ingredient_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),'Article' => array(
			'className' => 'Article',
			'joinTable' => 'products_articles',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'article_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
