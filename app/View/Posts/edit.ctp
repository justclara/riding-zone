<div class="posts index">
	<h1>Editer l'Article</h1>
	<?php echo $this->Form->create('Post'); ?>
		<?php echo $this->Form->input('title',array('label'=>'Titre'));?>
		<?php //echo $this->Form->input('slug',array('label'=>'URL simplifié'));?>
		<?php echo $this->Form->input('category_id',array('label'=>'Catégorie'));?>
		<?php //echo $this->Form->input('content',array('label'=>'Contenu','type'=>'textarea'));?>
		<?php echo $this->Form->input('Post.content', array('label'=>false, 'cols'=>'1', 'rows'=>'1'));?>
		<?php echo $this->Ck->load('Post.content');?>
	<?php echo $this->Form->end('Editer'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Articles",array('action'=>'index','controller'=>'posts') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Article",array('action'=>'add','controller'=>'posts') ) ; ?></li>
		<li><?php echo $this->Html->link("Lister les Catégories",array('action'=>'index','controller'=>'categories') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Catégorie",array('action'=>'add','controller'=>'categories') ) ; ?></li>
	</ul>
</div>