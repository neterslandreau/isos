<?php
/* IsoUser Fixture generated on: 2012-03-01 16:57:55 : 1330639075 */
class IsoUserFixture extends CakeTestFixture {
	var $name = 'IsoUser';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'iso_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'passwd' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password_token' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email_authenticated' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'email_token' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email_token_expires' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'tos' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'last_login' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'last_activity' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'is_admin' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'role' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'BY_USERNAME' => array('column' => 'username', 'unique' => 0), 'BY_EMAIL' => array('column' => 'email', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4f4ff0e3-8678-44f3-b698-1773d2bac6d6',
			'iso_id' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'passwd' => 'Lorem ipsum dolor sit amet',
			'password_token' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'email_authenticated' => 1,
			'email_token' => 'Lorem ipsum dolor sit amet',
			'email_token_expires' => '2012-03-01 16:57:55',
			'tos' => 1,
			'active' => 1,
			'last_login' => '2012-03-01 16:57:55',
			'last_activity' => '2012-03-01 16:57:55',
			'is_admin' => 1,
			'role' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-03-01 16:57:55',
			'modified' => '2012-03-01 16:57:55'
		),
	);
}
