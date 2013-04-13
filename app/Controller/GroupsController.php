<?php
App::uses('CakeTime', 'Utility');
App::uses('AppController', 'Controller');
class GroupsController extends AppController {
    	public $uses = array('Group');
	public $helpers =  array('Html','Form');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

	public function index()
	{
		$this->set('groups', $this->Group->find('all'));
	}
    	public function add()
    	{
	        if ($this->request->is('post')) {
	            $this->Group->create();
	            if ($this->Group->save($this->request->data)) {
	                $this->Session->setFlash('Your Group has been saved.');
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash('Unable to add your Group.');
	            }
	        }

    	}
	public function edit($id = null)
	{
		if (!$id) {
		        throw new NotFoundException(__('Invalid Group'));
		}

		$group = $this->Group->findById($id);
		if (!$group) {
		        throw new NotFoundException(__('Invalid Group'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Group->id = $id;
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash('Your Group has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your Group.');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $group;
		}
	}
    	public function view($id=null)
    	{
		if (!$id) {
			throw new NotFoundException(__('Invalid Group'));
		}

		$group = $this->Group->findById($id);
		if (!$group) {
			throw new NotFoundException(__('Invalid Group'));
		}
		$this->set('group', $group);

    	}
	public function delete($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid Group'));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash('Group Supprimé');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('le Group n\'a pas été Supprimé');
		$this->redirect(array('action' => 'index'));
	}
}