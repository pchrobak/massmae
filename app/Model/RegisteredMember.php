<?php
App::uses('AppModel', 'Model');
/**
 * RegisteredMember Model
 *
 * @property State $State
 */
class RegisteredMember extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'firstname';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	public $hasMany = array(
        'RegisteredProduct' => array(
            'RegisteredProduct' => 'Recipe'
        ),
    );
	
	
}
