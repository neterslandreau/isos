<?php
class IsosAppController extends AppController {
/* */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->helpers[] = 'Tags.TagCloud';
		$isoRoles = array('iso_agent', 'iso_admin');
		if (in_array($this->Auth->user('role'), $isoRoles)) {
			$this->layout = 'default';
		}
		if (Configure::read('debug')) {
			$this->Email->delivery = 'debug';
		}
	}

//	protected function _authSetup() {
//		$this->Auth->loginAction = array('plugin' => 'isos', 'controller' => 'iso_users', 'action' => 'login');
//		$this->Auth->fields = array('username' => 'email_address', 'password' => 'passwd');
//		$this->Auth->logoutRedirect = '/';
//		$this->AUth->loginError = __('Invalid username / password combination. Please try again.', true);
//		$this->Auth->autoRedirect = false;
//		$this->Auth->authorize = 'controller';
//		$this->Auth->userScope = array(
//			'IsoUser.email_authenticated' => 1
//		);
//		if ($this->Auth->user()) {
//			$this->currentUser = $this->Auth->User();
//			$this->set('currentUser', $currentUser);
//			
//		}
//
//	}
/* */
}

?>