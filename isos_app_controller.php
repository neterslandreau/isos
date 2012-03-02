<?php
class IsosAppController extends AppController {

	public function beforeFilter() {
//debug($this->Auth->password('password'));
//debug($this->name);
//debug($this->action);
//debug($this->layout);
//debug($scripts_for_layout);
		$this->_movedHosts();
		$this->_setupLogging();
		$this->_initializeHosts();
		$emptyUser = array(
			'User' => array(
				'role' => 'ghoti',
				'business_id' => $this->currentWebsite['Website']['business_id'],
				'website_id' => $this->currentWebsite['Website']['id'],
				'name' => 'Nobody',
				'email_address' => 'nobody@example.com',
				'password' => sha1('mxyzptlk' . time())
			)
		);

		$this->Auth->fields = array('username' => 'email_address', 'password' => 'password');
		$this->Auth->autoRedirect = false;
		$this->Auth->userScope = array(
			'User.deleted' => false,
			'User.website_id' => $this->currentWebsite['Website']['id']
		);
		if ($currentUser = $this->Auth->user()) {
			$this->currentUser = $currentUser;
			$this->set('currentUser', $currentUser);
		} else {
			$this->currentUser = $emptyUser;
		}
		$this->_doPrefixes();
	}

}

?>