<?php
/* IsoCategory Fixture generated on: 2012-03-02 16:19:26 : 1330723166 */
class IsoCategoryFixture extends CakeTestFixture {
	public $name = 'IsoCategory';

	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'iso_listing_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $records = array(
		array(
			'id' => '4f51395e-7380-4085-852a-4ac97f000001',
			'iso_listing_id' => '4f5123d7-2750-460c-a6ab-48ce7f000001',
			'category_id' => 1
		),
	);
}
?>