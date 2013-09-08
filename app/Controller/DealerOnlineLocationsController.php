<?php
App::uses('AppController', 'Controller');
/**
 * DealerOnlineLocations Controller
 *
 * @property DealerOnlineLocation $DealerOnlineLocation
 */
class DealerOnlineLocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DealerOnlineLocation->recursive = 0;
		$this->set('dealerOnlineLocations', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DealerOnlineLocation->create();
			if ($this->DealerOnlineLocation->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an Online Location!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DealerOnlineLocation->id = $id;
		if (!$this->DealerOnlineLocation->exists()) {
			throw new NotFoundException(__('Invalid dealer online location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DealerOnlineLocation->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an Online Location!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->DealerOnlineLocation->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->DealerOnlineLocation->id = $id;
		if (!$this->DealerOnlineLocation->exists()) {
			throw new NotFoundException('Invalid dealer online location');
		}
		if ($this->DealerOnlineLocation->delete()) {
			$this->Session->setFlash('You have successfully Deleted an Online Dealer Location!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The Online Dealer Location was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
