<?php
App::uses('AppController', 'Controller');
/**
 * ProductsFeatures Controller
 *
 * @property ProductsFeature $ProductsFeature
 */
class ProductsFeaturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductsFeature->recursive = 0;
		$this->set('productsFeatures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductsFeature->id = $id;
		if (!$this->ProductsFeature->exists()) {
			throw new NotFoundException(__('Invalid products feature'));
		}
		$this->set('productsFeature', $this->ProductsFeature->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsFeature->create();
			if ($this->ProductsFeature->save($this->request->data)) {
				$this->Session->setFlash(__('The products feature has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products feature could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductsFeature->Product->find('list');
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
		$this->ProductsFeature->id = $id;
		if (!$this->ProductsFeature->exists()) {
			throw new NotFoundException(__('Invalid products feature'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductsFeature->save($this->request->data)) {
				$this->Session->setFlash(__('The products feature has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products feature could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductsFeature->read(null, $id);
		}
		$products = $this->ProductsFeature->Product->find('list');
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
		$this->ProductsFeature->id = $id;
		if (!$this->ProductsFeature->exists()) {
			throw new NotFoundException(__('Invalid products feature'));
		}
		if ($this->ProductsFeature->delete()) {
			$this->Session->setFlash(__('Products feature deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Products feature was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
