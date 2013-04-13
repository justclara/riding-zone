<div class="posts index">
<h1>Blog posts</h1>
	<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Created</th>
		<th>Actions</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo $group['Group']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($group['Group']['name'], array('controller' => 'groups', 'action' => 'view', $group['Group']['id'])); ?>
		</td>
		<td><?php echo $group['Group']['created']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link("Supprimer le Groupe",array('action'=>'delete','controller'=>'groups',$group['Group']['id'] ), array('confirm' => 'Are you sure?')); ?>
			<?php echo $this->Html->link("Editer le Groupe",array('action'=>'edit','controller'=>'groups',$group['Group']['id'] )); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($group); ?>
	</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Ajouter un Groupe",array('action'=>'add','controller'=>'groups') ) ; ?></li>
	</ul>
</div>