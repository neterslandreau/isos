<?php
/* Iso Test cases generated on: 2012-03-01 16:57:45 : 1330639065*/
App::import('Model', 'Isos.IsoListing');

class IsoListingTestCase extends CakeTestCase {
	public function startTest() {
		$this->IsoListing =& ClassRegistry::init('IsoListing');
	}

	public function endTest() {
		unset($this->IsoListing);
		ClassRegistry::flush();
	}
	
	public function testInstance() {
		$this->assertIsA($this->IsoListing, 'IsoListing');
debug($this->IsoListing->hasAndBelongsToMany);
	}

}
