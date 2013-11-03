<?php
App::uses('AppController', 'Controller');
/**
 * DealerInternationalLocations Controller
 *
 * @property DealerInternationalLocation $DealerInternationalLocation
 */
class DealerInternationalLocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DealerInternationalLocation->recursive = 0;
		$this->set('dealerInternationalLocations', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DealerInternationalLocation->create();
			if ($this->DealerInternationalLocation->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an International Location!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
        $countries = $this->DealerInternationalLocation->Country->find('list',array('fields' => array('short_name'),'order'=>'short_name asc'));
        $this->set(compact('countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DealerInternationalLocation->id = $id;
		if (!$this->DealerInternationalLocation->exists()) {
			throw new NotFoundException(__('Invalid dealer international location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DealerInternationalLocation->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an International Location!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->DealerInternationalLocation->read(null, $id);
		}
        $countries = $this->DealerInternationalLocation->Country->find('list',array('fields' => array('short_name'),'order'=>'short_name asc'));
        $this->set(compact('countries'));
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
		$this->DealerInternationalLocation->id = $id;
		if (!$this->DealerInternationalLocation->exists()) {
			throw new NotFoundException(__('Invalid dealer international location'));
		}
		if ($this->DealerInternationalLocation->delete()) {
			$this->Session->setFlash('You have successfully Deleted an International Dealer Location!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The International Dealer Location was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
