<?php
/* IsoUser Test cases generated on: 2012-03-01 16:57:55 : 1330639075*/
App::import('Model', 'Isos.IsoUser');

class IsoUserTestCase extends CakeTestCase {
	function startTest() {
		$this->IsoUser =& ClassRegistry::init('IsoUser');
	}

	function endTest() {
		unset($this->IsoUser);
		ClassRegistry::flush();
	}

}
