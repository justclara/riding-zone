<div class="users add">
	<h1>Ajouter un Utilisateur</h1>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('username',array('label'=>'Pseudo'));?>
		<?php echo $this->Form->input('password',array('label'=>'Mot de passe'));?>
		<?php echo $this->Form->input('firstname',array('label'=>'Prénom'));?>
		<?php echo $this->Form->input('lastname',array('label'=>'Nom'));?>
		<?php echo $this->Form->input('group_id',array('label'=>'Groupe'));?>
	<?php echo $this->Form->end('Ajouter'); ?>
</div>
