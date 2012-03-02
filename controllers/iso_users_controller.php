<?php
class IsoUsersController extends IsosAppController {

	public $name = 'IsoUsers';

	public function index() {
		$this->IsoUser->recursive = 0;
		$this->set('isoUsers', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid iso user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('isoUser', $this->IsoUser->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->IsoUser->create();
			if ($this->IsoUser->save($this->data)) {
				$this->Session->setFlash(__('The iso user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso user could not be saved. Please, try again.', true));
			}
		}
		$isos = $this->IsoUser->Iso->find('list');
		$this->set(compact('isos'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid iso user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IsoUser->save($this->data)) {
				$this->Session->setFlash(__('The iso user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IsoUser->read(null, $id);
		}
		$isos = $this->IsoUser->Iso->find('list');
		$this->set(compact('isos'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for iso user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IsoUser->delete($id)) {
			$this->Session->setFlash(__('Iso user deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Iso user was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function mcp_index() {
		$this->index();
	}

	public function mcp_view($id = null) {
		$this->view($id);
	}

	public function mcp_add() {
		$this->add();
	}

	public function mcp_edit($id = null) {
		$this->edit($id);
	}

	public function mcp_delete($id = null) {
		$this->delete($id);
	}
	public function cc_index() {
		$this->index();
	}

	public function cc_view($id = null) {
		$this->view($id);
	}

	public function cc_add() {
		$this->add();
	}

	public function cc_edit($id = null) {
		$this->edit($id);
	}

	public function cc_delete($id = null) {
		$this->delete($id);
	}
}
?>