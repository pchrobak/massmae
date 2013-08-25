<?php
App::uses('AppController', 'Controller');
/**
 * ProductsImagesSwatches Controller
 *
 * @property ProductsImagesSwatch $ProductsImagesSwatch
 */
class ProductsImagesSwatchesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductsImagesSwatch->recursive = 0;
		$this->set('productsImagesSwatches', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsImagesSwatch->create();
			if ($this->ProductsImagesSwatch->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Product Image!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$products = $this->ProductsImagesSwatch->Product->find('list');
		$finishes = $this->ProductsImagesSwatch->Finish->find('list');
		$this->set(compact('products', 'finishes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductsImagesSwatch->id = $id;
		if (!$this->ProductsImagesSwatch->exists()) {
			throw new NotFoundException(__('Invalid products images swatch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductsImagesSwatch->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Product Image!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->ProductsImagesSwatch->read(null, $id);
		}
		$products = $this->ProductsImagesSwatch->Product->find('list');
		$finishes = $this->ProductsImagesSwatch->Finish->find('list');
		$this->set(compact('products', 'finishes'));
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
		$this->ProductsImagesSwatch->id = $id;
		if (!$this->ProductsImagesSwatch->exists()) {
			throw new NotFoundException(__('Invalid products images swatch'));
		}
		if ($this->ProductsImagesSwatch->delete()) {
			$this->Session->setFlash('Product Image was successfully deleted!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Product Image was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
