<div class="users index">
<h1>Utilisateurs</h1>
	<table>
	<tr>
		<th>Id</th>
		<th>Pseudo</th>
		<th>Created</th>
		<th>Actions</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
		</td>
		<td><?php echo $user['User']['created']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link("Supprimer",array('action'=>'delete','controller'=>'users',$user['User']['id'] ), array('confirm' => 'Are you sure?')); ?>
			<?php echo $this->Html->link("Editer",array('action'=>'edit','controller'=>'users',$user['User']['id'] )); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($user); ?>
	</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Ajouter un Utilisateur",array('action'=>'add','controller'=>'users') ) ; ?></li>
	</ul>
</div>
