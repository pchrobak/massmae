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
        'language_id' => array (
            'rule'    => 'notEmpty',
            'message' => 'You must select a language'
        ),
		'title' => array(
            'rule'    => 'notEmpty',
            'required' => true,
            'message'  => 'You must enter a title'
        ),
		'page_text' => array(
            'rule'    => 'notEmpty',
            'required' => true,
            'message'  => 'You must enter text for this page'
        )
		
	);
}
