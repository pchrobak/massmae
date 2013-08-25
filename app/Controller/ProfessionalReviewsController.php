<?php
App::uses('AppController', 'Controller');
/**
 * ProfessionalReviews Controller
 *
 * @property ProfessionalReview $ProfessionalReview
 */
class ProfessionalReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProfessionalReview->recursive = 0;
		$this->set('professionalReviews', $this->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProfessionalReview->create();
			if ($this->ProfessionalReview->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Professional Review!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->ProfessionalReview->Product->find('list');
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
		$this->ProfessionalReview->id = $id;
		if (!$this->ProfessionalReview->exists()) {
			throw new NotFoundException(__('Invalid professional review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProfessionalReview->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Professional Review!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->ProfessionalReview->read(null, $id);
		}
		$products = $this->ProfessionalReview->Product->find('list');
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
		$this->ProfessionalReview->id = $id;
		if (!$this->ProfessionalReview->exists()) {
			throw new NotFoundException(__('Invalid professional review'));
		}
		if ($this->ProfessionalReview->delete()) {
			$this->Session->setFlash('You have successfully Deleted a Professional Review!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Professional Review was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
