<?php
App::uses('AppController', 'Controller');
/**
 * HeroSpots Controller
 *
 * @property HeroSpot $HeroSpot
 */
class HeroSpotsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HeroSpot->recursive = 0;
		$this->set('heroSpots', $this->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HeroSpot->create();
			if ($this->HeroSpot->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Homepge Hero Spot!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HeroSpot->id = $id;
		if (!$this->HeroSpot->exists()) {
			throw new NotFoundException(__('Invalid hero spot'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HeroSpot->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Homepge Hero Spot!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->HeroSpot->read(null, $id);
		}
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
		$this->HeroSpot->id = $id;
		if (!$this->HeroSpot->exists()) {
			throw new NotFoundException(__('Invalid hero spot'));
		}
		if ($this->HeroSpot->delete()) {
			$this->Session->setFlash('You have successfully Deleted a Homepge Hero Spot!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The Homepge Hero Spot was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
