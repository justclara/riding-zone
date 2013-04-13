			<p>
				<strong>Bonjour <?php echo $username; ?></strong>
			</p>
			
			<p>Votre inscription a bien été enregistré, veuillez cliquer sur le lien ci dessous pour activer votre compte: </p>
			<p><?php echo $this->Html->link('Activation compte de '.$username,$this->Html->url($link,true),array('class'=>'btn primary')); ?></p>		
			<p><small>Merci de ne pas repondre a cet email.</small></p>
