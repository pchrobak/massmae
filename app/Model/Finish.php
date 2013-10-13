<?php
App::uses('AppModel', 'Model');
/**
 * Finish Model
 *
 * @property Product $Product
 */
class Finish extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	//Validate
	public $validate = array(
        'language_id' => array (
            'rule'    => 'notEmpty',
            'message' => 'You must select a language'
        ),
		'name' => array(
			'rule'    => 'notEmpty',
			'message' => 'Name or finish image cannot be blank'
		)
	);
	
	public $actsAs = array(
        'Upload.Upload' => array(
            'filename' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                )
            )
        )
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

}
