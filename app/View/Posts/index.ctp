<div class="posts index">
<h1>Blog posts</h1>
	<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>Actions</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['slug'].'-'.$post['Post']['id'])); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link("Supprimer l'Article",array('action'=>'delete','controller'=>'posts',$post['Post']['id'] ), array('confirm' => 'Are you sure?')); ?>
			<?php echo $this->Html->link("Editer l'Article",array('action'=>'edit','controller'=>'posts',$post['Post']['id'] )); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
	</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Ajouter un Article",array('action'=>'add','controller'=>'posts') ) ; ?></li>
	</ul>
</div>