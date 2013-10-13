<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		$this->request->data['Article']['directory'] = strtolower(str_replace(' ', '-', $this->request->data['Article']['title']));
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an Article!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->Article->Product->find('list');
        $parents = $this->Article->find('list', array(
            'conditions'=> array('language_id'=>'1')
        ));
		$this->set(compact('products', 'parents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		$this->request->data['Article']['directory'] = strtolower(str_replace(' ', '-', $this->request->data['Article']['title']));
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an Article!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Article->read(null, $id);
		}
		$products = $this->Article->Product->find('list');
        $parents = $this->Article->find('list', array(
            'conditions'=> array('language_id'=>'1')
        ));
        $this->set(compact('products', 'parents'));
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
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->Article->delete()) {
			$this->Session->setFlash('Article was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Article was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
