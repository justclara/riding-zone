<div class="posts view">
	<h1><?php echo $post['Post']['title'];?></h1>
	<p><?php echo $post['Post']['content'];?></p>
	<p><small><?php echo $post['Post']['created'];?></small></p>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Lister les Articles",array('action'=>'index','controller'=>'posts') ) ; ?></li>
		<li><?php echo $this->Html->link("Ajouter un Article",array('action'=>'add','controller'=>'posts') ) ; ?></li>
		<li><?php echo $this->Html->link("Editer L'article",array('action'=>'edit','controller'=>'posts',$post['Post']['id'] ) ); ?></li>
		<li><?php echo $this->Html->link("Supprimer l'Article",array('action'=>'delete','controller'=>'posts',$post['Post']['id'] ), array('confirm' => 'Are you sure?')); ?></li>
	</ul>
</div>