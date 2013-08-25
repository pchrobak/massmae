<?php
App::uses('AppModel', 'Model');
/**
 * SitePage Model
 *
 */
class SitePage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	
	public $validate = array(
		'title' => array(
            'rule'    => 'notEmpty',
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'directory' => array(
            'rule'    => 'notEmpty',
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'page_text' => array(
            'rule'    => array('minLength', 5),
            'required' => true,
            'message'  => 'This field cannot be blank'
        ),
		'visible' => array(
            'rule'    => 'numeric',
            'required' => true,
            'message'  => 'This field cannot be blank'
        )
		
	);
}
