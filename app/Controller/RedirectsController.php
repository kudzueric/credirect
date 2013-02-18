<?php

class RedirectsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index($filter = null) {
		if (!$filter) {
			$this->set('redirects', $this->Redirect->find('all'));
		} else {
			$this->set('redirects', $this->Redirect->findAllByCampaign($filter));
		}
	}

	public function view($id = null) {
		if(!$id) {
			$url = $this->url();
		}

		$redirect = $this->Redirect->findByRedirectKey($id);
		if(!$redirect) {
			$url = $this->url();
		}
		
		$url = $this->url($redirect);
		$this->set('url', $url);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Redirect->create();
			if ($this->Redirect->save($this->request->data)) {
				$this->Session->setFlash('Your redirect has been saved.');
                		$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your redirect.');
			}

		}
	}

	public function edit($id = null) {
	    if (!$id) {
		throw new NotFoundException(__('Invalid redirect'));
	    }

	    $redirect = $this->Redirect->findById($id);
	    if (!$redirect) {
		throw new NotFoundException(__('Invalid redirect'));
	    }

	    if ($this->request->is('redirect') || $this->request->is('put')) {
		$this->Redirect->id = $id;
		if ($this->Redirect->save($this->request->data)) {
		    $this->Session->setFlash('Your redirect has been updated.');
		    $this->redirect(array('action' => 'index'));
		} else {
		    $this->Session->setFlash('Unable to update your redirect.');
		}
	    }

	    if (!$this->request->data) {
		$this->request->data = $redirect;
	    }
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
		throw new MethodNotAllowedException();
	    }

	    if ($this->Redirect->delete($id)) {
		$this->Session->setFlash('The recirect with id: ' . $id . ' has been deleted.');
		$this->redirect(array('action' => 'index'));
	    }
	}
	
	public function r($id = null) {
		
		
		if(!$id) {
			$this->redirect($this->url());
		}

		$redirect = $this->Redirect->findByRedirectKey($id);
		if(!$redirect) {
			$this->redirect($this->url());
		}

		$this->redirect($this->url($redirect));
	}
	
	public function beforeFilter() {
		$this->Auth->allow('r');
	}
	
}
