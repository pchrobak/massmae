<?php
App::uses('AppController', 'Controller');
/**
 * Highresolutions Controller
 *
 * @property Highresolution $Highresolution
 */
class HighresolutionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Highresolution->recursive = 0;
		$this->set('highresolutions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Highresolution->id = $id;
		if (!$this->Highresolution->exists()) {
			throw new NotFoundException(__('Invalid highresolution'));
		}
		$this->set('highresolution', $this->Highresolution->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Highresolution->create();
			if ($this->Highresolution->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an Image!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->Highresolution->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Highresolution->id = $id;
		if (!$this->Highresolution->exists()) {
			throw new NotFoundException(__('Invalid highresolution'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Highresolution->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an Image!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Highresolution->read(null, $id);
		}
		$products = $this->Highresolution->Product->find('list');
		$this->set(compact('products'));
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
		$this->Highresolution->id = $id;
		if (!$this->Highresolution->exists()) {
			throw new NotFoundException(__('Invalid highresolution'));
		}
		if ($this->Highresolution->delete()) {
			$this->Session->setFlash('Image was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Image was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
