<div class="posts view">
	<h1><?php echo $user['User']['username'];?></h1>
	<p><?php echo $user['User']['firstname'];?></p>
	<p><?php echo $user['User']['lastname'];?></p>
	<p><small><?php echo $user['User']['created'];?></small></p>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Utilisateurs",array('action'=>'index','controller'=>'users') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Utilisateur",array('action'=>'add','controller'=>'users') ) ; ?></li>
		<li><?php echo $this->Html->link("Editer L'Utilisateur",array('action'=>'edit','controller'=>'users',$user['User']['id'] ) ); ?></li>
		<li><?php echo $this->Html->link("Supprimer l'Utilisateur",array('action'=>'delete','controller'=>'users',$user['User']['id'] ), array('confirm' => 'Are you sure?')); ?></li>
	</ul>
</div>