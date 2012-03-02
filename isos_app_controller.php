<?php
class IsosAppController extends AppController {
/* *
	public function beforeFilter() {
		if (Configure::read('debug')) {
			$this->Email->delivery = 'debug';
		}
		$this->_setupLogging();
		$this->Auth->loginAction = array('plugin' => 'isos', 'controller' => 'iso_users', 'action' => 'login');
		$this->Auth->fields = array('username' => 'email_address', 'password' => 'passwd');
		$this->Auth->logoutRedirect = '/';
		$this->AUth->loginError = __('Invalid username / password combination. Please try again.', true);
		$this->Auth->autoRedirect = false;
		$this->Auth->authorize = 'controller';
		$this->Auth->userScope = array(
			'IsoUser.email_authenticated' => 1
		);
		if ($this->Auth->user()) {
			$this->currentUser = $this->Auth->User();
			$this->set('currentUser', $currentUser);
			
		}
		$emptyUser = array(
			'User' => array(
				'role' => 'ghoti',
				'name' => 'Nobody',
				'email_address' => 'nobody@example.com',
				'password' => sha1('mxyzptlk' . time())
			)
		);
		if ($currentUser = $this->Auth->user()) {
			$this->currentUser = $currentUser;
			$this->set('currentUser', $currentUser);
		} else {
			$this->currentUser = $emptyUser;
		}
		$this->_doPrefixes();
	}
/* */
}

?>