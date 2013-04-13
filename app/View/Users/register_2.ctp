<div class="users">
	<h1><?php echo $title_for_layout; ?></h1>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('firstname',array('label'=>'Nom'));?>
		<?php echo $this->Form->input('lastname',array('label'=>'Prénom'));?>
		<label for="UserBirthday">Date de Naissance</label>
		<?php echo $this->Form->day('birthday', array(
			'dateFormat' => 'D',
			'empty' => 'Jour'
		)); ?>
		<?php echo $this->Form->month('birthday', array(
			'dateFormat' => 'M',
			'monthNames' => array(
				'01' => 'Janvier', 
				'02' => 'Février', 
				'03' => 'Mars', 
				'04' => 'Avril', 
				'05' => 'Mai', 
				'06' => 'Juin', 
				'07' => 'juillet', 
				'08' => 'Août', 
				'09' => 'Séptembre', 
				'10' => 'Octobre', 
				'11' => 'Novembre', 
				'12' => 'Décembre', 
			),
			'empty' => 'Mois'
		)); ?>
		<?php echo $this->Form->year('birthday', 1930, date('Y'), array(
			'empty' => 'Année'
		)); ?>
		<?php echo $this->Form->input('country_id',array('label'=>'Pays','value'=>'67'));?>
		<?php echo $this->Form->input('city',array('label'=>'Ville'));?>
	<?php echo $this->Form->end('Etape suivante'); ?>
</div>
