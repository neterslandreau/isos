<?php
class Iso extends IsosAppModel {
	public $name = 'Iso';
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasMany = array(
		'IsoListing',
	);
	
	public $actsAs = array(
		'Utils.Sluggable' => array(
			'label' => 'name',
			'method' => 'multibyteSlug'
		)
	);
}
