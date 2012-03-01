<?php
/* IsoUsers Test cases generated on: 2012-03-01 16:59:17 : 1330639157*/
App::import('Controller', 'Isos.IsoUsers');

class TestIsoUsersController extends IsoUsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IsoUsersControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->IsoUsers =& new TestIsoUsersController();
		$this->IsoUsers->constructClasses();
	}

	function endTest() {
		unset($this->IsoUsers);
		ClassRegistry::flush();
	}

}
