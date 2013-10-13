<?php
App::uses('AppController', 'Controller');
/**
 * Faqs Controller
 *
 * @property Faq $Faq
 */
class FaqsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Faq->recursive = 0;
		$this->set('faqs', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//auto generate directory URL
			$this->request->data['Faq']['directory'] = strtolower(str_replace(array(' ','?'), array('-', ''), $this->request->data['Faq']['question']));
			$this->Faq->create();
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an FAQ!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->Faq->Product->find('list');
        $parents = $this->Faq->find('list', array(
            'conditions'=> array('language_id'=>'1'),
            'fields'=> array('question')
        ));
		$this->set(compact('products','parents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//auto generate directory URL
			$this->request->data['Faq']['directory'] = strtolower(str_replace(array(' ','?'), array('-', ''), $this->request->data['Faq']['question']));
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved an FAQ!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Faq->read(null, $id);
		}
		$products = $this->Faq->Product->find('list');
        $parents = $this->Faq->find('list', array(
            'conditions'=> array('language_id'=>'1'),
            'fields'=> array('question')
        ));
        $this->set(compact('products','parents'));
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
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->Faq->delete()) {
			$this->Session->setFlash('An FAQ was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The FAQ was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
