<?php
class M4f4fe8e7c46046d0a6441607d2bac6d6 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'isos' => array(
					'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
					'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'slug' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'country_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 11),
					'active' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
				),
				'iso_listings' => array(
					'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
					'iso_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36),
					'address_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 11),
					'category_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 11),
					'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'slug' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'url' => array('type' => 'string', 'null' => false, 'default' => null),
					'phone' => array('type' => 'string', 'null' => false, 'default' => null),
					'fax' => array('type' => 'string', 'null' => false, 'default' => null),
					'short_description' => array('type' => 'string', 'null' => false, 'default' => null),
					'long_description' => array('type' => 'text', 'null' => false, 'default' => null),
					'keywords' => array('type' => 'text', 'null' => false, 'default' => null),
					'business_hours' => array('type' => 'text', 'null' => false, 'default' => null),
					'url' => array('type' => 'string', 'null' => false, 'default' => null),
					'active' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'isos', 'iso_listings'
			)
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
?>