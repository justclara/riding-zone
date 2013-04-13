<div class="categories view">
	<h1><?php echo $categorie['Category']['name'];?></h1>
	<p><small><?php echo $categorie['Category']['created'];?></small></p>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Categories",array('action'=>'index','controller'=>'categories') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter une Category",array('action'=>'add','controller'=>'categories') ) ; ?></li>
		<li><?php echo $this->Html->link("Editer La Category",array('action'=>'edit','controller'=>'categories',$categorie['Category']['id'] ) ); ?></li>
		<li><?php echo $this->Html->link("Supprimer La Category",array('action'=>'delete','controller'=>'categories',$categorie['Category']['id'] ), array('confirm' => 'Are you sure?')); ?></li>
	</ul>
</div>