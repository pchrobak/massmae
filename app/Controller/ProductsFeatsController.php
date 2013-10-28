<?php
App::uses('AppController', 'Controller');
/**
 * ProductsFeats Controller
 *
 * @property ProductsFeat $ProductsFeat
 */
class ProductsFeatsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductsFeat->recursive = 0;
		$this->set('productsFeats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductsFeat->id = $id;
		if (!$this->ProductsFeat->exists()) {
			throw new NotFoundException(__('Invalid products feature'));
		}
		$this->set('productsFeat', $this->ProductsFeat->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsFeat->create();
			if ($this->ProductsFeat->save($this->request->data)) {
                $this->Session->setFlash('You have successfully Saved a product feature!', 'default', array('class' => 'success_message'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
            }
		}
		$productFeatures = $this->ProductsFeat->ProductFeature->find('list');
		$this->set(compact('productFeatures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductsFeat->id = $id;
		if (!$this->ProductsFeat->exists()) {
			throw new NotFoundException(__('Invalid products feat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductsFeat->save($this->request->data)) {
                $this->Session->setFlash('You have successfully Saved a Product Feature!', 'default', array('class' => 'success_message'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
            }
		} else {
			$this->request->data = $this->ProductsFeat->read(null, $id);
		}
		$productFeatures = $this->ProductsFeat->ProductFeature->find('list');
		$this->set(compact('productFeatures'));
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
		$this->ProductsFeat->id = $id;
		if (!$this->ProductsFeat->exists()) {
			throw new NotFoundException(__('Invalid products feat'));
		}
		if ($this->ProductsFeat->delete()) {
            $this->Session->setFlash('A Product Feature was successfully deleted!', 'default', array('class' => 'success_message'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Sorry, there was an error, A feature was not deleted', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
