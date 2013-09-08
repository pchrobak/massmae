<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 */
class Article extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	
	//Validate
	public $validate = array(
		'title' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a title'
		),
		'body' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter text for this news article'
		)
	);
	/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'products_articles',
			'foreignKey' => 'article_id',
			'associationForeignKey' => 'product_id',
			'unique' => 'keepExisting',
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
