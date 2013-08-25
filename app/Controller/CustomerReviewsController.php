<?php
App::uses('AppController', 'Controller');
/**
 * CustomerReviews Controller
 *
 * @property CustomerReview $CustomerReview
 */
class CustomerReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerReview->recursive = 0;
		$this->set('customerReviews', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerReview->create();
			if ($this->CustomerReview->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Customer Review!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->CustomerReview->Product->find('list');
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
		$this->CustomerReview->id = $id;
		if (!$this->CustomerReview->exists()) {
			throw new NotFoundException(__('Invalid customer review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerReview->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Customer Review!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->CustomerReview->read(null, $id);
		}
		$products = $this->CustomerReview->Product->find('list');
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
		$this->CustomerReview->id = $id;
		if (!$this->CustomerReview->exists()) {
			throw new NotFoundException(__('Invalid customer review'));
		}
		if ($this->CustomerReview->delete()) {
			$this->Session->setFlash('The Customer Review was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The Customer Review was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
