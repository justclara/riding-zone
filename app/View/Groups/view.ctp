<div class="groups view">
	<h1><?php echo $group['Group']['name'];?></h1>
	<p><small><?php echo $group['Group']['created'];?></small></p>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Groupes",array('action'=>'index','controller'=>'groups') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Groupe",array('action'=>'add','controller'=>'groups') ) ; ?></li>
		<li><?php echo $this->Html->link("Editer Le Groupe",array('action'=>'edit','controller'=>'groups',$group['Group']['id'] ) ); ?></li>
		<li><?php echo $this->Html->link("Supprimer Le Groupe",array('action'=>'delete','controller'=>'groups',$group['Group']['id'] ), array('confirm' => 'Are you sure?')); ?></li>
	</ul>
</div>