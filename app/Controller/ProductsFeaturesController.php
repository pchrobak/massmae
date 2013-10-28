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
                $this->Session->setFlash('You have successfully Saved a product overview!', 'default', array('class' => 'success_message'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
            }
        }
		$products = $this->ProductsFeature->Product->find('list', array(
            'conditions'=> array('language_id'=>'1')
        ));
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
                $this->Session->setFlash('You have successfully Saved a Product Overview!', 'default', array('class' => 'success_message'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
            }
		} else {
			$this->request->data = $this->ProductsFeature->read(null, $id);
		}
        $products = $this->ProductsFeature->Product->find('list', array(
            'conditions'=> array('language_id'=>'1')
        ));
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
            $this->Session->setFlash('A Product Overview was successfully deleted!', 'default', array('class' => 'success_message'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Sorry, there was an error, A feature was not deleted', 'default', array('class' => 'error_message'));
        $this->redirect(array('action' => 'index'));
	}
}
