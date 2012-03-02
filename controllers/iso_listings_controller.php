<?php
class IsoListingsController extends IsosAppController {

	var $name = 'IsoListings';

	function index() {
		$this->IsoListing->recursive = 0;
		$this->set('isoListings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid iso listing', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('isoListing', $this->IsoListing->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IsoListing->create();
			if ($this->IsoListing->save($this->data)) {
				$this->Session->setFlash(__('The iso listing has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso listing could not be saved. Please, try again.', true));
			}
		}
		$isos = $this->IsoListing->Iso->find('list');
		$addresses = $this->IsoListing->Address->find('list');
		$states = $this->IsoListing->State->find('list');
		$cities = $this->IsoListing->City->find('list');
		$this->set(compact('isos', 'addresses', 'states', 'cities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid iso listing', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IsoListing->save($this->data)) {
				$this->Session->setFlash(__('The iso listing has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso listing could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IsoListing->read(null, $id);
		}
		$isos = $this->IsoListing->Iso->find('list');
		$addresses = $this->IsoListing->Address->find('list');
		$states = $this->IsoListing->State->find('list');
		$cities = $this->IsoListing->City->find('list');
		$this->set(compact('isos', 'addresses', 'states', 'cities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for iso listing', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IsoListing->delete($id)) {
			$this->Session->setFlash(__('Iso listing deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Iso listing was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function mcp_index() {
		$this->IsoListing->recursive = 0;
		$this->set('isoListings', $this->paginate());
	}

	function mcp_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid iso listing', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('isoListing', $this->IsoListing->read(null, $id));
	}

	function mcp_add() {
		if (!empty($this->data)) {
			$this->IsoListing->create();
			if ($this->IsoListing->save($this->data)) {
				$this->Session->setFlash(__('The iso listing has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso listing could not be saved. Please, try again.', true));
			}
		}
		$isos = $this->IsoListing->Iso->find('list');
		$addresses = $this->IsoListing->Address->find('list');
		$states = $this->IsoListing->State->find('list');
		$cities = $this->IsoListing->City->find('list');
		$this->set(compact('isos', 'addresses', 'states', 'cities'));
	}

	function mcp_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid iso listing', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IsoListing->save($this->data)) {
				$this->Session->setFlash(__('The iso listing has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iso listing could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IsoListing->read(null, $id);
		}
		$isos = $this->IsoListing->Iso->find('list');
		$addresses = $this->IsoListing->Address->find('list');
		$states = $this->IsoListing->State->find('list');
		$cities = $this->IsoListing->City->find('list');
		$this->set(compact('isos', 'addresses', 'states', 'cities'));
	}

	function mcp_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for iso listing', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IsoListing->delete($id)) {
			$this->Session->setFlash(__('Iso listing deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Iso listing was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>