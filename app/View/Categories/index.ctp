<div class="posts index">
<h1>Catégories</h1>
	<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Created</th>
		<th>Actions</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo $category['Category']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($category['Category']['name'], array('controller' => 'categories', 'action' => 'view', $category['Category']['id'])); ?>
		</td>
		<td><?php echo $category['Category']['created']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link("Supprimer la Category",array('action'=>'delete','controller'=>'categories',$category['Category']['id'] ), array('confirm' => 'Are you sure?')); ?>
			<?php echo $this->Html->link("Editer la Category",array('action'=>'edit','controller'=>'categories',$category['Category']['id'] )); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>
	</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("Ajouter une Category",array('action'=>'add','controller'=>'categories') ) ; ?></li>
	</ul>
</div>