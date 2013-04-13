<?php
App::uses('CakeTime', 'Utility');
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    	public $uses = array('Post');
    	public $helpers = array('Html', 'Form', 'Session', 'Text', 'Time', 'Js');
	public $components = array('Session','RequestHandler'); // Customize the User class

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','view');
	}
	public function index()
	{
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id = null,$slug = null) 
	{
		$this->Post->id = $id;
		$this->Post->slug = $slug;
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}
	public function add()
	{
	        if ($this->request->is('post')) {
	            $this->Post->create();
	            if ($this->Post->save($this->request->data)) {
	                $this->Session->setFlash('Your post has been saved.');
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash('Unable to add your post.');
	            }
	        }
	$categories = $this->Post->Category->find('list');
	$this->set(compact('categories'));
	}

	public function edit($id = null)
	{
		if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
		        throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your post.');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	$categories = $this->Post->Category->find('list');
	$this->set(compact('categories'));
	}

	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid Article'));
		}
		if ($this->Post->delete()) {
			$this->Session->setFlash('Article Supprimé');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('l\'article n\'a pas été Supprimé');
		$this->redirect(array('action' => 'index'));
	}
	public function initDB() 
	{
		$group = $this->User->Group;
		//Allow admins to everything
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');

		//allow managers to posts and widgets
		$group->id = 2;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Posts');
		$this->Acl->allow($group, 'controllers/Groups');
		$this->Acl->allow($group, 'controllers/Users');

		//allow users to only add and edit on posts and widgets
		$group->id = 3;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Posts/view');
		$this->Acl->allow($group, 'controllers/Posts/index');
		$this->Acl->allow($group, 'controllers/Users/edit');
		$this->Acl->allow($group, 'controllers/Users/logout');
		//we add an exit to avoid an ugly "missing views" error message
		echo "all done";
		exit;
	}

}
