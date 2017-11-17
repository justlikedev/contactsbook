<?php

class ContactsController extends AppController {

	public $helpers = array('Html', 'Form');
	public $components = array('Flash');
	public $name = 'Contacts';
    

	public function index() {
		
		$this->set('contacts', $this->Contact->find('all'));

	}

	public function new() {
		$this->set('types', $this->Contact->types);
		$this->set('operators', $this->Contact->operators);
	}

	public function add() {
		
		if ($this->request->is('post')) {			
            if ($this->Contact->save($this->request->data)) {
                $this->Flash->success('Seu contato foi adicionado.');
                $this->redirect(array('action' => 'index'));
            } else {
            	$this->Flash->error('Ocorreu um erro ao salvar.');
                $this->redirect(array('action' => 'new'));
            }
        }
        
	}

	public function edit($id = null) {

		$this->set('types', $this->Contact->types);
		$this->set('operators', $this->Contact->operators);

    	$this->Contact->id = $id;
    	
    	if ($this->request->is('get')) {        	
        	$this->set('contact', $this->Contact->findById($id));
    	} else {
        	if ($this->Contact->save($this->request->data)) {
            	$this->Flash->success('Seu contato foi atualizado.');
            	$this->redirect(array('action' => 'index'));
        	} else {
            	$this->Flash->error('Ocorreu um erro ao atualizar.');
                $this->redirect(array('action' => 'index'));
            }
    	}
	}

	public function delete($id = null) {

		if (!$this->request->is('post')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->Contact->delete($id)) {
	        $this->Flash->success('Contado removido.');
	        $this->redirect(array('action' => 'index'));
	    }
	}

	public function search($name = null) {

		if ($this->request->data('name')) {
			$name = $this->request->data('name');
			
			$contacts =	$this->Contact->find('all', 
								array('conditions' =>
									array('Contact.name LIKE' => '%'.$name.'%')));
			
			
			$this->set('contacts', $contacts);
			$this->render('index');
		}
	}
}

?>