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
