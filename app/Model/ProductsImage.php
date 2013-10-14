<?php
App::uses('AppModel', 'Model');
/**
 * ProductsImage Model
 *
 * @property Products $Products
 */
class ProductsImage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'filename';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array(
        'Upload.Upload' => array(
            'filename' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailSizes' => array(
                    'large' => '800x600',
                    'small' => '220x165',
                    'thumb' => '40x40'
                )
            )
        )
    );
	
	//Validate
	public $validate = array(
		'product_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a product'
		)
	);
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
