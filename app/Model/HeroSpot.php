<?php
App::uses('AppModel', 'Model');
/**
 * HeroSpot Model
 *
 */
class HeroSpot extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	 public $actsAs = array(
        'Upload.Upload' => array(
            'hero_image' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailSizes' => array(
                    'large' => '940x500',
					'thumb' => '140x70'
                )
            )
        )
    );
}
