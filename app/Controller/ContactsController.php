<?php

/**
 *
 */
class ContactsController extends AppController {

  public $components = array('Session');

		public function index() {
			$data = $this->Contact->find('all');

			$this->set('contacts',$data);
		}

    public function add() {
      if($this->request->is('post')) {
        $this->Contact->create();
        if($this->Contact->save($this->request->data)) {
          $this->Session->setFlash('New Contact added');
          //return $this->redirect(array('action'=>'index'));
        }
        else {
          $this->Session->setFlash('Sorry, Unable to add new Contact');
        }
      }
      $this->set('contacts',$this->Contact->Customer->find('list'));
    }


}



?>
