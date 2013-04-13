<?php
App::uses('CakeTime', 'Utility');
App::uses('AppController', 'Controller');
class CategoriesController extends AppController {
    	public $uses = array('Category');
	public $helpers =  array('Html','Form');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

	public function index()
	{
		$this->set('categories', $this->Category->find('all'));
	}
    	public function add()
    	{
	        if ($this->request->is('post')) {
	            $this->Category->create();
	            if ($this->Category->save($this->request->data)) {
	                $this->Session->setFlash('Your Category has been saved.');
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash('Unable to add your Category.');
	            }
	        }

    	}
	public function edit($id = null)
	{
		if (!$id) {
		        throw new NotFoundException(__('Invalid Category'));
		}

		$categorie = $this->Category->findById($id);
		if (!$categorie) {
		        throw new NotFoundException(__('Invalid Category'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Category->id = $id;
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('Your Category has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your Category.');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $categorie;
		}
	}
    	public function view($id=null)
    	{
		if (!$id) {
			throw new NotFoundException(__('Invalid Category'));
		}

		$categorie = $this->Category->findById($id);
		if (!$categorie) {
			throw new NotFoundException(__('Invalid Category'));
		}
		$this->set('categorie', $categorie);

    	}
	public function delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid Category'));
		}
		if ($this->Category->delete()) {
			$this->Session->setFlash('Category Supprimé');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('le Category n\'a pas été Supprimé');
		$this->redirect(array('action' => 'index'));
	}
}