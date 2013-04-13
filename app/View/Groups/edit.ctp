<div class="groups index">
	<h1>Ajouter un Article</h1>
	<?php echo $this->Form->create('Group'); ?>
		<?php echo $this->Form->input('name',array('label'=>'Nom Du Groupe'));?>
	<?php echo $this->Form->end('Ajouter'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Groupes",array('action'=>'index','controller'=>'groups') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Groupe",array('action'=>'add','controller'=>'groups') ) ; ?></li>
	</ul>
</div>