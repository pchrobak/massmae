<?php
App::uses('AppModel', 'Model');
/**
 * Series Model
 *
 * @property Product $Product
 */
class Series extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'series_name';
	
	public $actsAs = array(
        'Upload.Upload' => array(
            'series_image' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailSizes' => array(
                    'large' => '1024x768',
                    'small' => '640x480',
                    'thumb' => '100x100'
                )
            )
        )
    );
	
	public $validate = array(
		'series_name' => array(
            'rule'    => 'notEmpty',
			'message' => 'Series Name cannot be blank'
        ),
		'directory' => array(
            'rule'    => 'notEmpty',
			'message' => 'Directory name cannot be blank'
        ),
		'overview' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'series_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
