<?php
App::uses('AppModel', 'Model');
/**
 * News Model
 *
 */
class News extends AppModel {

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
}
