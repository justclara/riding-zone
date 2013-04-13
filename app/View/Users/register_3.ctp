<div class="users">
	<h1><?php echo $title_for_layout; ?></h1>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('username',array('type'=>'hidden'));?>
		<?php echo $this->Form->input('email',array('type'=>'hidden'));?>
		<?php echo $this->Form->input('sexe_id',array('label'=>'Genre/Sexe'));?>
		<?php echo $this->Form->input('description',array('type'=>'textarea','label'=>'Déscription'));?>
		<?php echo $this->Form->input('facebook',array('type'=>'url','label'=>'Facebook'));?>
		<?php echo $this->Form->input('twitter',array('type'=>'url','label'=>'Twitter'));?>
		<?php echo $this->Form->input('google',array('type'=>'url','label'=>'Google+'));?>
	<?php echo $this->Form->end('Finaliser votre inscription'); ?>
</div>
