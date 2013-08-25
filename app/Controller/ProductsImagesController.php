<?php
App::uses('AppController', 'Controller');
/**
 * ProductsImages Controller
 *
 * @property ProductsImage $ProductsImage
 */
class ProductsImagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductsImage->recursive = 0;
		$this->set('productsImages', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsImage->create();
			if ($this->ProductsImage->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Gallery Image!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->ProductsImage->Product->find('list');
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
		$this->ProductsImage->id = $id;
		if (!$this->ProductsImage->exists()) {
			throw new NotFoundException(__('Invalid products image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductsImage->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Product Gallery Image!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->ProductsImage->read(null, $id);
		}
		$products = $this->ProductsImage->Product->find('list');
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
		$this->ProductsImage->id = $id;
		if (!$this->ProductsImage->exists()) {
			throw new NotFoundException(__('Invalid products image'));
		}
		if ($this->ProductsImage->delete()) {
			$this->Session->setFlash('Product Gallery Image was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Product Gallery Image was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
