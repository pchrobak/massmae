<?php
App::uses('AppModel', 'Model');
/**
 * DealerInternationalLocation Model
 *
 */
class DealerInternationalLocation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'company_name';

	
	//Validate
	public $validate = array(
		'type' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a dealer type'
		),
		'company_name' => array(
			'rule'    => 'email',
			'message' => 'You must enter a company name'
		),
		'address' => array(
			'rule'    => 'email',
			'message' => 'You must enter an address'
		),
		'website' => array(
			'rule'    => 'url',
			'message' => 'You must enter a valid url for the website (start with http://)'
		)
	);
}
