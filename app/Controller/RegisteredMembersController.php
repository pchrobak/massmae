<?php
App::uses('AppController', 'Controller');
/**
 * RegisteredMembers Controller
 *
 * @property RegisteredMember $RegisteredMember
 */
class RegisteredMembersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RegisteredMember->recursive = 0;
		$this->set('registeredMembers', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegisteredMember->create();
			if ($this->RegisteredMember->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved the Member information!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$states = $this->RegisteredMember->State->find('list');
		$this->set(compact('states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RegisteredMember->id = $id;
		if (!$this->RegisteredMember->exists()) {
			throw new NotFoundException(__('Invalid registered member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RegisteredMember->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved the Member information!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->RegisteredMember->read(null, $id);
		}
		$states = $this->RegisteredMember->State->find('list');
		$this->set(compact('states'));
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
		$this->RegisteredMember->id = $id;
		if (!$this->RegisteredMember->exists()) {
			throw new NotFoundException(__('Invalid registered member'));
		}
		if ($this->RegisteredMember->delete()) {
			$this->Session->setFlash('Member was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Member was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
