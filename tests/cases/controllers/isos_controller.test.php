<?php
/* Isos Test cases generated on: 2012-03-02 09:00:27 : 1330696827*/
App::import('Controller', 'Isos.Isos');

class TestIsosController extends IsosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IsosControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Isos =& new TestIsosController();
		$this->Isos->constructClasses();
	}

	function endTest() {
		unset($this->Isos);
		ClassRegistry::flush();
	}

}
?>