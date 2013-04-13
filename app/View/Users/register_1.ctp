<div class="users">
	<h1><?php echo $title_for_layout; ?></h1>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('id',array('type'=>'hidden'));?>
		<?php echo $this->Form->input('username',array('label'=>'Pseudo'));?>
		<?php echo $this->Form->input('password',array('label'=>'Mot de passe'));?>
		<?php echo $this->Form->input('password_confirm',array('label'=>'Confirmez votre Mot de passe'));?>
		<?php echo $this->Form->input('email',array('label'=>'Adresse mail Valide'));?>
	<?php echo $this->Form->end('Etape suivante'); ?>
</div>
