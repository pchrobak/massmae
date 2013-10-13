<?php
App::uses('AppController', 'Controller');
/**
 * Finishes Controller
 *
 * @property Finish $Finish
 */
class FinishesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Finish->recursive = 0;
		$this->set('finishes', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Finish->create();
			if ($this->Finish->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Finish!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
        $parents = $this->Finish->find('list', array(
            'conditions'=> array('language_id'=>'1')
        ));
        $this->set(compact('parents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Finish->id = $id;
		if (!$this->Finish->exists()) {
			throw new NotFoundException(__('Invalid finish'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Finish->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Finish!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Finish->read(null, $id);
		}
        $parents = $this->Finish->find('list', array(
            'conditions'=> array('language_id'=>'1')
        ));
        $this->set(compact('parents'));
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
		$this->Finish->id = $id;
		if (!$this->Finish->exists()) {
			throw new NotFoundException(__('Invalid finish'));
		}
		if ($this->Finish->delete()) {
			$this->Session->setFlash('A Finish was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The Finish was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
