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
		'name' => array(
			'rule'    => 'notEmpty',
			'message' => 'Name or finish image cannot be blank'
		),
		'filename' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a file'
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
