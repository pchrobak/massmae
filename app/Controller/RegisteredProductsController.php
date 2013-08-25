<?php
App::uses('AppController', 'Controller');
/**
 * RegisteredProducts Controller
 *
 * @property RegisteredProduct $RegisteredProduct
 */
class RegisteredProductsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RegisteredProduct->recursive = 0;
		$this->set('registeredProducts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RegisteredProduct->id = $id;
		if (!$this->RegisteredProduct->exists()) {
			throw new NotFoundException(__('Invalid registered product'));
		}
		$this->set('registeredProduct', $this->RegisteredProduct->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegisteredProduct->create();
			if ($this->RegisteredProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The registered product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registered product could not be saved. Please, try again.'));
			}
		}
		$registeredMembers = $this->RegisteredProduct->RegisteredMember->find('list');
		$products = $this->RegisteredProduct->Product->find('list');
		$this->set(compact('registeredMembers', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RegisteredProduct->id = $id;
		if (!$this->RegisteredProduct->exists()) {
			throw new NotFoundException(__('Invalid registered product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RegisteredProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The registered product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registered product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RegisteredProduct->read(null, $id);
		}
		$registeredMembers = $this->RegisteredProduct->RegisteredMember->find('list');
		$products = $this->RegisteredProduct->Product->find('list');
		$this->set(compact('registeredMembers', 'products'));
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
		$this->RegisteredProduct->id = $id;
		if (!$this->RegisteredProduct->exists()) {
			throw new NotFoundException(__('Invalid registered product'));
		}
		if ($this->RegisteredProduct->delete()) {
			$this->Session->setFlash(__('Registered product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registered product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
