<?php
App::uses('AppController', 'Controller');
/**
 * DealerUsLocations Controller
 *
 * @property DealerUsLocation $DealerUsLocation
 */
class DealerUsLocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DealerUsLocation->recursive = 0;
		$this->set('dealerUsLocations', $this->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DealerUsLocation->create();
			if ($this->DealerUsLocation->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Dealer US Location!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		}
		$states = $this->DealerUsLocation->State->find('list',array('order'=>'name asc'));
		$this->set(compact('states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DealerUsLocation->id = $id;
		if (!$this->DealerUsLocation->exists()) {
			throw new NotFoundException(__('Invalid dealer us location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		var_dump($this->request->data);
		
		
		 $wholestreet = "";
         $wholecity = "";
         $state = "";

                $address1=explode(" ",$this->request->data['DealerUsLocation']['address1']);
                $counter=count($address1);
                for($i=0;$i<=$counter-1;$i++)
                {
                        if($i==$counter-1)
                        {
                                $wholestreet.=$address1[$i];
                        }
                        else
                        {
                                $wholestreet.=$address1[$i]."+";
                        }
                }
                $city=explode(" ",$this->request->data['DealerUsLocation']['city']);
                $num=count($city);
                for($j=0;$j<=$num-1;$j++)
                {
                        if($i==$num-1)
                        {
                                $wholecity.=$city[$j];

                        }
                        else
                        {
                                $wholecity.=$city[$j]."+";

                        }
                }
                $state = 'MD';
                $maps_api ="AIzaSyDF7vhscFMAGs8czl-qz5cOG3TOUrWvW-w";
                $state = str_replace(" ", "%20", $state);

                if($fh = fopen("http://maps.google.com/maps/geo?q=$wholestreet,+$wholecity,+$state&output=csv&oe=utf8&sensor=true&key=$maps_api","r")   ){
                        while(!feof($fh)){
                                usleep(150000);
                                $output = fgets($fh, 1024);
                        }
                        fclose($fh);
                }

                        $csv = explode(",", $output);
                        $long=$csv[2];
                        $lat=$csv[3];

        
var_dump($long.','. $lat);
		
		
		
		
		
		
		
		
		
		
		
			if ($this->DealerUsLocation->save($this->request->data)) {
				$this->Session->setFlash('You have successfully Saved a Dealer US Location!', 'default', array('class' => 'success_message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error in saving this form.  Please make sure all require fields are filled in', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->request->data = $this->DealerUsLocation->read(null, $id);
		}
		$states = $this->DealerUsLocation->State->find('list',array('order'=>'name asc'));
		$this->set(compact('states'));
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
		$this->DealerUsLocation->id = $id;
		if (!$this->DealerUsLocation->exists()) {
			throw new NotFoundException(__('Invalid dealer us location'));
		}
		if ($this->DealerUsLocation->delete()) {
			$this->Session->setFlash('You have successfully Deleted a Dealer Location!', 'default', array('class' => 'success_message'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The Dealer Location was not deleted. Please try again', 'default', array('class' => 'error_message'));
		$this->redirect(array('action' => 'index'));
	}
}
