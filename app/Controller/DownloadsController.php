<?php
App::uses('AppController', 'Controller');
/**
 * Downloads Controller
 *
 * @property Download $Download
 */
class DownloadsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Download->recursive = 0;
		$this->set('downloads', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Download->create();
			if ($this->Download->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Download!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
        $parents = $this->Download->find('list', array(
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
		$this->Download->id = $id;
		if (!$this->Download->exists()) {
			throw new NotFoundException(__('Invalid download'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Download->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Download!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Download->read(null, $id);
		}
        $parents = $this->Download->find('list', array(
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
		$this->Download->id = $id;
		if (!$this->Download->exists()) {
			throw new NotFoundException(__('Invalid download'));
		}
		if ($this->Download->delete()) {
			$this->Session->setFlash('Download was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Download was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
