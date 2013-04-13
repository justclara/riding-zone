<div class="posts view">
	<?php //debug($user);?>
	<h2><?php echo $user['User']['username'];?></h2>
	<p><b>Nom: </b><?php echo $user['User']['firstname'];?></p>
	<p><b>Prénom: </b><?php echo $user['User']['lastname'];?></p>
	<p><b>Email: </b><?php echo $user['User']['email'];?></p>
	<p><b>Date Naissance: </b><?php echo $this->Time->format('j F Y ', $user['User']['birthday'], null,null);?></p>
	<p><b>Adresse IP: </b><?php echo $user['User']['ip'];?></p>
	<p><b>Facebook: </b><?php echo $user['User']['facebook'];?></p>
	<p><b>Twitter: </b><?php echo $user['User']['twitter'];?></p>
	<p><b>Google+: </b><?php echo $user['User']['google'];?></p>
	<p><b>Sexe/Genre: </b><?php echo $user['Sexe']['name'];?></p>
	<p><b>Pays: </b><?php echo $user['Country']['name'];?></p>
	<p><b>Ville: </b><?php echo $user['User']['city'];?></p>
	<p><b>Déscription: </b><?php echo $user['User']['description'];?></p>
	<p><small><b>Membre depuis le:  </b>
	<?php $timestamp = strtotime($user['User']['created']);
	echo (strftime("%d %B %Y ", $timestamp));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Utilisateurs",array('action'=>'index','controller'=>'users') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Utilisateur",array('action'=>'add','controller'=>'users') ) ; ?></li>
		<li><?php echo $this->Html->link("Editer L'Utilisateur",array('action'=>'edit','controller'=>'users',$user['User']['id'] ) ); ?></li>
		<li><?php echo $this->Html->link("Supprimer l'Utilisateur",array('action'=>'delete','controller'=>'users',$user['User']['id'] ), array('confirm' => 'Are you sure?')); ?></li>
	</ul>
</div>