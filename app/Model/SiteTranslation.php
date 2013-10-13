<?php
App::uses('AppModel', 'Model');
/**
 * SiteTranslation Model
 *
 */
class SiteTranslation extends AppModel {



//Validation
    public $validate = array(
        'language_id' => array (
            'rule'    => 'notEmpty',
            'message' => 'You must enter a phrase'
        )
    );

    /**
 * Display field
 *
 * @var string
 */
	public $displayField = 'phrase_1';

}
