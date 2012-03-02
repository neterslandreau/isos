<?php
/* IsoCategory Test cases generated on: 2012-03-02 16:19:26 : 1330723166*/
App::import('Model', 'Isos.IsoCategory');

class IsoCategoryTestCase extends CakeTestCase {
	function startTest() {
		$this->IsoCategory =& ClassRegistry::init('IsoCategory');
	}

	function endTest() {
		unset($this->IsoCategory);
		ClassRegistry::flush();
	}

}
?>