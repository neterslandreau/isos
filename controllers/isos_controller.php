<?php
class IsosController extends IsosAppController {

	public $name = 'Isos';

	public function index() {
		$this->Iso->recursive = 0;
		$this->set('isos', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid iso', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('iso', $this->Iso->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Iso->create();
			if ($this->Iso->save($this->data)) {
				$this->Session->setFlash(__('The iso has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Iso->Country->find('list');
		$this->set('countries', $countries);
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid iso', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Iso->save($this->data)) {
				$this->Session->setFlash(__('The iso has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Iso->read(null, $id);
			$countries = $this->Iso->Country->find('list');
			$this->set('countries', $countries);
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for iso', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Iso->delete($id)) {
			$this->Session->setFlash(__('Iso deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Iso was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function agent_manager() {
		$agents = $this->Iso->User->find('all', array(
			'conditions' => array(
				'User.iso_id' => $this->Auth->user('iso_id')
			),
		));
		$this->set('agents', $agents);
	}

	public function mcp_index() {
		$this->index();
		$this->render('index');
	}

	public function mcp_view($id = null) {
		$this->view($id);
		$this->render('view');
	}

	public function mcp_add() {
		$this->add();
		$this->render('add');
	}

	public function mcp_edit($id = null) {
		$this->edit($id);
		$this->render('edit');
	}

	public function mcp_delete($id = null) {
		$this->delete($id);
	}
	public function cc_index() {
		$this->index();
		$this->render('index');
	}

	public function cc_view($id = null) {
		$this->view($id);
		$this->render('view');
	}

	public function cc_add() {
		$this->add();
		$this->render('add');
	}

	public function cc_edit($id = null) {
		$this->edit($id);
		$this->render('edit');
	}

	public function cc_delete($id = null) {
		$this->delete($id);
	}
}
?>