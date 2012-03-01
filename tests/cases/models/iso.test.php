<?php
/* Iso Test cases generated on: 2012-03-01 16:57:45 : 1330639065*/
App::import('Model', 'Isos.Iso');

class IsoTestCase extends CakeTestCase {
	function startTest() {
		$this->Iso =& ClassRegistry::init('Iso');
	}

	function endTest() {
		unset($this->Iso);
		ClassRegistry::flush();
	}

}
