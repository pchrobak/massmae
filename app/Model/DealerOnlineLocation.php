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
}
