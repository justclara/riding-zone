<?php
//App::uses('AppModel', 'Model');
class Post extends AppModel {
    public $actsAs =  
        array  
        (  
            'Containable',
            //'Media.Media',
            //'Hitcount' => array('hitField' => 'view'),
            //'Comment.Commentable'
        );  
	public $displayField = 'title';
	//public $hasAndBelongsToMany = array('Tag'); 
	//public $hasMany = array('Comment', 'PostTag');
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			//'counterCache' => array('post_count' => array('Post.online'=>1)),	
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $recursive = -1; 
	public $order = 'Post.created DESC';
	public $validate = array(
		'slug' => array(
			'rule' 		 => '/^[a-z0-9\-]+$/',
			'allowEmpty' 	 => true,
			'message'	 => "L'url n'est pas valide"
		),
        		'title' => array(
			'rule' 		 => 'notEmpty',
			'message'	 => "Vous devez préciser un titre"
        ),
        		'content' => array(
			'rule' 		 => 'notEmpty',
			'message'	 => "Vous devez entrer un contenu"
        )
    );
	/**
	* Permet de générer / récupérer un brouillon
	**/
	public function getDraft($type){
		$post = $this->find('first',array(
			'conditions' => array('online' => -1,'type' => $type)
		));
		if(empty($post)){
			$this->save(array(
				'type' => $type,
				'online' => -1
			),false);
			$post = $this->read();
		}
		$post['Post']['online'] = 0; 
		return $post; 
	}

	
	/*public function afterFind($data){
		foreach($data as $k=>$d){
			if(isset($d['Post']['slug']) && isset($d['Post']['id']) && isset($d['Post']['type'])){
				$d['Post']['link'] = array(
					'controller'	=> Inflector::pluralize($d['Post']['type']),
					'action'		=> 'show',
					'id'			=> $d['Post']['id'],
					'slug'			=> $d['Post']['slug']
				);
			}
			$data[$k] = $d;
		}
		return $data;
	}*/


	public function beforeSave(){
		if(empty($this->data['Post']['slug']) && isset($this->data['Post']['slug']) && !empty($this->data['Post']['title']))
			$this->data['Post']['slug'] = strtolower(Inflector::slug($this->data['Post']['title'],'-'));
		return true; 
	}

	/*public function afterSave(){
		if(!empty($this->data['Post']['tags'])){
			$tags = explode(',',$this->data['Post']['tags']); 
			foreach($tags as $tag){
				$tag = trim($tag);
				if(!empty($tag)){
					$d = $this->Tag->findByName($tag);
					if(!empty($d)){
						$this->Tag->id = $d['Tag']['id']; 
					}else{
						$this->Tag->create(); 
						$this->Tag->save(array(
							'name' => $tag
						)); 
					}
					$this->PostTag->create(); 
					$this->PostTag->save(array(
						'post_id' => $this->id,
						'tag_id' => $this->Tag->id
					)); 
				}
			}
		}
	 	return true; 
	}*/
}
?>