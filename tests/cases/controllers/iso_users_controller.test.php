<?php
/* IsoUsers Test cases generated on: 2012-03-01 16:59:17 : 1330639157*/
App::import('Controller', 'Isos.IsoUsers');

class TestIsoUsersController extends IsoUsersController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IsoUsersControllerTestCase extends CakeTestCase {
	public function startTest() {
		$this->IsoUsers = new TestIsoUsersController();
		$this->IsoUsers->constructClasses();
	}

	public function endTest() {
		unset($this->IsoUsers);
		ClassRegistry::flush();
	}
	public function testInstance() {
		$this->assertIsA($this->IsoUsers, 'TestIsoUsersController');
		debug($this->IsoUsers->Auth);
	}

}
