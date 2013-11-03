<?php
App::uses('AppModel', 'Model');
/**
 * DealerOnlineLocation Model
 *
 */
class DealerOnlineLocation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'company_name';
	
//Validate
	public $validate = array(
		'company_name' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a company name'
		),
		'address' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter an address'
		),
		'website' => array(
			'rule'    => 'url',
			'message' => 'You must enter a valid url for the website (start with http://)'
		),
		'state_id' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must select a state'
		),
		'zip' => array(
			'rule'    => 'notEmpty',
			'message' => 'You must enter a zip or postal code'
		)
	);
	
	public $actsAs = array(
        'Upload.Upload' => array(
            'logo' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailSizes' => array(
                    'thumb' => '100x100'
                )
            )
        )
    );

    public $belongsTo = array(
        'Country' => array(
            'className' => 'Country',
            'foreignKey' => 'country_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}

