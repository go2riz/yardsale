<?php
/* Tests Test cases generated on: 2014-04-21 14:07:44 : 1398071264*/
App::import('Controller', 'Tests');

class TestTestsController extends TestsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TestsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Tests =& new TestTestsController();
		$this->Tests->constructClasses();
	}

	function endTest() {
		unset($this->Tests);
		ClassRegistry::flush();
	}

}
?>