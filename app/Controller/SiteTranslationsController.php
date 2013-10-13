<?php
App::uses('AppController', 'Controller');
/**
 * SiteTranslations Controller
 *
 * @property SiteTranslation $SiteTranslation
 */
class SiteTranslationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SiteTranslation->recursive = 0;
		$this->set('siteTranslations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SiteTranslation->id = $id;
		if (!$this->SiteTranslation->exists()) {
			throw new NotFoundException(__('Invalid site translation'));
		}
		$this->set('siteTranslation', $this->SiteTranslation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SiteTranslation->create();
			if ($this->SiteTranslation->save($this->request->data)) {
                $this->Session->setFlash('You have successfully Saved a Translation!', 'default', array('class' => 'success_message'));
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
		$this->SiteTranslation->id = $id;
		if (!$this->SiteTranslation->exists()) {
			throw new NotFoundException(__('Invalid site translation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SiteTranslation->save($this->request->data)) {
                $this->Session->setFlash('You have successfully Saved a Translation!', 'default', array('class' => 'success_message'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
            }
		} else {
			$this->request->data = $this->SiteTranslation->read(null, $id);
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
		$this->SiteTranslation->id = $id;
		if (!$this->SiteTranslation->exists()) {
			throw new NotFoundException(__('Invalid site translation'));
		}
		if ($this->SiteTranslation->delete()) {
            $this->Session->setFlash('Translation was successfully deleted!', 'default', array('class' => 'success_message'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Translation was not deleted', 'default', array('class' => 'error_message'));
        $this->redirect(array('action' => 'index'));
	}
}
