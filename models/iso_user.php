<?php
class IsoUser extends IsosAppModel {
	var $name = 'IsoUser';
	var $validate = array(
		'iso_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
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

	var $belongsTo = array(
		'Iso' => array(
			'className' => 'Iso',
			'foreignKey' => 'iso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $actsAs = array(
		'Utils.Sluggable' => array(
			'label' => 'username',
			'method' => 'multibyteSlug'
		)
	);
}
