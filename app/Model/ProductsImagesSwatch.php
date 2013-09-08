<?php
App::uses('AppModel', 'Model');
/**
 * ProductsImagesSwatch Model
 *
 * @property Product $Product
 * @property Finish $Finish
 */
class ProductsImagesSwatch extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'product_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array(
        'Upload.Upload' => array(
            'products_filename' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailSizes' => array(
                    'large' => '800x600',
                    'small' => '460x345',
                    'thumb' => '220x165'
                )
            )
        )
    );
	//The Associations below have been created with all possible keys, those that are not needed can be removed

		//Validate
	public $validate = array(
		'product_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a product'
		),
		'finish_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a finish'
		),
		'products_filename' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must upload an image'
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
		),
		'Finish' => array(
			'className' => 'Finish',
			'foreignKey' => 'finish_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
