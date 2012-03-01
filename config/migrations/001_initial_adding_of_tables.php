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
					'active' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
				),
				'iso_users' => array(
					'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
					'iso_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36),
					'username' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'slug' => array('type'=>'string', 'null' => false, 'default' => NULL),
					'passwd' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
					'password_token' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
					'email' => array('type'=>'string', 'null' => true, 'default' => NULL),
					'email_authenticated' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'email_token' => array('type'=>'string', 'null' => true, 'default' => NULL),
					'email_token_expires' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'tos' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'active' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'last_login' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'last_activity' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'is_admin' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
					'role' => array('type'=>'string', 'null' => true, 'default' => NULL),
					'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'BY_USERNAME' => array('column' => array('username'), 'unique' => 0),
						'BY_EMAIL' => array('column' => array('email'), 'unique' => 0)
					),
				),
			),
		),
		'down' => array(
			'isos', 'iso_users',
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