<?php
class Iso extends IsosAppModel {
/**
 *
 * @var string 
 */
	public $name = 'Iso';
/**
 *
 * @var array
 */
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
/**
 *
 * @var array
 */
	public $hasMany = array(
		'IsoListing',
		'User',
	);
/**
 *
 * @var array
 */
	public $belongsTo = array(
		'Country' => array(
			'className' => 'Country',
			'foreign_key' => 'country_id',
		),
	);
/**
 *
 * @var array
 */
	public $actsAs = array(
		'Utils.Sluggable' => array(
			'label' => 'name',
			'method' => 'multibyteSlug',
		)
	);
}
