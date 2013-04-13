<div class="categories index">
	<h1>Editer la Catégorie</h1>
	<?php echo $this->Form->create('Category'); ?>
		<?php echo $this->Form->input('name',array('label'=>'Nom De La Catégorie'));?>
	<?php echo $this->Form->end('Ajouter'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Catégories",array('action'=>'index','controller'=>'categories') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter une Catégorie",array('action'=>'add','controller'=>'categories') ) ; ?></li>
	</ul>
</div>