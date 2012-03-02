<?php
/* IsoListings Test cases generated on: 2012-03-02 14:48:33 : 1330717713*/
App::import('Controller', 'isos.IsoListings');

class TestIsoListingsController extends IsoListingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IsoListingsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->IsoListings =& new TestIsoListingsController();
		$this->IsoListings->constructClasses();
	}

	function endTest() {
		unset($this->IsoListings);
		ClassRegistry::flush();
	}

}
?>