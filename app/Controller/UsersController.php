<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('CakeTime', 'Utility');
class UsersController extends AppController{
 	
 	public $components = array('Auth', 'Session', 'Email','RequestHandler');
	public $helpers =  array('Html','Form');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','view','login','register_1','register_2','register_2','confirm','profil','password');
	}

	public function index()
	{
		$this->set('users', $this->User->find('all'));
	}

	public function view($id = null)
	{
		if (!$id) {
			throw new NotFoundException(__('Invalid User'));
		}

		$user = $this->User->findById($id);
		if (!$user) {
			throw new NotFoundException(__('Invalid User'));
		}
		$this->set('user', $user);
	}

	public function profil($username = null)
	{
		if (!$username) {
			throw new NotFoundException(__('Invalid User'));
		}

		$user = $this->User->findByUsername($username);
		if (!$user) {
			throw new NotFoundException(__('Invalid User'));
		}
		$this->set('user', $user);
	}

	public function add()
	{
	       	 if ($this->request->is('post')) {
		            $this->User->create();
		            if ($this->User->save($this->request->data)) {
		                	$this->Session->setFlash('Your Account has been saved.');
		                	$this->redirect(array('action' => 'index'));
		            } else {
		               	$this->Session->setFlash('Unable to add your Account.');
		            }
	        	}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	public function edit($id = null) {
	        	$this->User->id = $id;
		$u = $this->User->read();
		$this->Auth->login($u['User']);
	        	if (!$this->User->exists()) {
		            throw new NotFoundException(__('Invalid user'));
	        	}
	        	if ($this->request->is('post') || $this->request->is('put')) {
		            if ($this->User->save($this->request->data)) {
				$this->Session->destroy();
				$this->Auth->login();
				$this->Session->setFlash('Votre profil a bien été édité');
		               
				$this->redirect(array('controller'=>'users', 'action' => 'view',$u['User']['id']));
		            } else {
				$this->Session->setFlash("Impossible de sauvegarder");
		            }
		        	} else {
			            $this->request->data = $this->User->read(null, $id);
			            unset($this->request->data['User']['password']);
		        	}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}


	public function delete($id = null)
	{
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid User'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash('User Supprimé');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('le User n\'a pas été Supprimé');
		$this->redirect(array('action' => 'index'));
	}
	public function login() {
		if ($this->Session->read('Auth.User')) {
        	$this->Session->setFlash('Vous êtes déjà connecté! '.$this->Session->read('Auth.User.username'));
        	$this->redirect(array('controller' => 'posts', 'action' => 'index'), null, false);
    	} else {
			if($this->request->is('post')){
				if($this->Auth->login()){
					$this->User->id =  $this->Auth->user("id");
					$u = $this->User->read();
					$this->Session->setFlash('Bonjour '.$this->Session->read('Auth.User.username').' Vous &ecirc;tes maintenant connecté');
					$this->redirect(array('controller'=>'users', 'action' => 'index'));
				}else{
					$this->Session->setFlash('Identifiants incorrects','notif-info',array('type'=>'error','class'=>'showNotification'));
				}
			}
    	}
	}


	public function logout() {
		$username = $this->Session->read('Auth.User.username');
		$this->Session->setFlash('Good-Bye '.$username.' à bientôt');
		$this->redirect($this->Auth->logout());
	}

	public function password() 
	{
		
	}

	public function register_1() 
	{
		$this->set('title_for_layout',"Inscription step 1"); 
	       	if ($this->request->is('post')) {
		            $this->User->create();
		            $this->request->data['User']['group_id'] = 3;
		            if ($this->User->save($this->request->data)) {
		                	$this->redirect(array('controller'=>'users', 'action' => 'register_2',$this->User->getLastInsertID()));
		            } else {
		               	$this->Session->setFlash('Unable to add your Account.');
		            }
	        	}
	}

	public function register_2($id = null) 
	{
		$this->set('title_for_layout',"Inscription step 2"); 
	        	$this->User->id = $id;
	        	if (!$this->User->exists()) {
		            throw new NotFoundException(__('Invalid user'));
	        	}
	        	if ($this->request->is('post') || $this->request->is('put')) {
		            if ($this->User->save($this->request->data)) {
				$this->redirect(array('controller'=>'users', 'action' => 'register_3',$id));
		            } else {
		               	$this->Session->setFlash('Unable to add your Account.');
		            }
		        	} else {
			            $this->request->data = $this->User->read(null, $id);
		        	}
		$countries = $this->User->Country->find('list');
		$this->set(compact('countries'));
	}

	public function register_3($id = null) 
	{
		$this->set('title_for_layout',"Inscription step 2"); 
	        	$this->User->id = $id;

	        	if (!$this->User->exists()) {
		            throw new NotFoundException(__('Invalid user'));
	        	}
	        	if ($this->request->is('post') || $this->request->is('put')) {
	        	$hash=sha1($this->data['User']['username'].rand(0,100));
		$pass= $this->data['User']['username'];
		$this->User->data['User']['activation_key']=$hash;

		$this->User->data['User']['ip'] = $this->RequestHandler->getClientIp();
		            if ($this->User->save($this->request->data)) {
				$link ='http://cakephp-2.3.2/users/confirm/t:'.$hash.'/n:'.$this->data['User']['username'].'/p:'.md5($pass).'';
				$email = new CakeEmail();
				$email->template('register', 'default');
				$email->emailFormat('html');
				$email->to($this->data['User']['email']);
				$email->subject('Confirmation inscription.');
				$email->from('noreply@justclara.sainter-city.fr');
				$email->viewVars(array('username'=>$this->data['User']['username'],'link'=>$link));
				$email->send('envoyer');
				$data = $this->request->data['User'];
				$message = __('Compte enregistré, un email a été envoyé pour activer votre compte', true);
				$this->Session->setFlash(__('Compte enregistré, un email a été envoyé pour activer votre compte'));
		                	$this->redirect(array('controller'=>'users', 'action' => 'login'));
		            } else {
		               	$this->Session->setFlash(__('Votre compte n\'a  pas été enregistré, Veullez reéssayer.', true));
		            }
		        	} else {
			            $this->request->data = $this->User->read(null, $id);
		        	}
		$sexes = $this->User->Sexe->find('list');
		$this->set(compact('sexes'));
	}

	public function confirm() 
	{
		
	}
}