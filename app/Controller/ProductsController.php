<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 */
class ProductsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//auto generate directory URL
			$this->request->data['Product']['prod_directory'] = strtolower(str_replace(' ', '-', $this->request->data['Product']['name']));
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Product!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$series = $this->Product->Series->find('list');
		$downloads = $this->Product->Download->find('list');
		$categories = $this->Product->Category->find('list');
        $parents = $this->Product->find('list');
       	$this->set(compact('series', 'categories', 'downloads', 'finishes', 'parents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//auto generate directory URL
			$this->request->data['Product']['prod_directory'] = strtolower(str_replace(' ', '-', $this->request->data['Product']['name']));
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Product!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		$series = $this->Product->Series->find('list');
		$downloads = $this->Product->Download->find('list');
		$categories = $this->Product->Category->find('list');
        $parents = $this->Product->find('list');
		$this->set(compact('series', 'categories', 'downloads', 'finishes', 'parents'));
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
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash('Product was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Product was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
