<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'DevSocialNetwork');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->Html->script('jquery-1.9.1.min.js');
		echo $this->Html->script('app.js');
		echo $this->Html->script('ckeditor/ckeditor.js');
		echo $this->Html->script('ckfinder/ckfinder.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav>
				<ul>
					<li><a href="/">Home</a></li>
					<li><?php echo $this->Html->link("Articles",array('action'=>'index','controller'=>'posts','plugin'=>false,'admin'=>false)); ?></li>
					<li><?php echo $this->Html->link("Groupes",array('action'=>'index','controller'=>'groups','plugin'=>false,'admin'=>false)); ?></li>
					<li><?php echo $this->Html->link("Categories",array('action'=>'index','controller'=>'categories','plugin'=>false,'admin'=>false)); ?></li>
					<li><?php echo $this->Html->link("Utilisateurs",array('action'=>'index','controller'=>'users','plugin'=>false,'admin'=>false)); ?></li>
					<?php if($this->Session->read('Auth.User')) { ?>
						<li><?php echo $this->Html->link("Logout",array('action'=>'logout','controller'=>'users','plugin'=>false,'admin'=>false)); ?></li>
						<li><?php echo $this->Html->link("Acl",array('action'=>'index','controller'=>'acl','plugin'=>'acl','admin'=>true)); ?></li>
					<?php }else{ ?>
						<li><?php echo $this->Html->link("Login",array('action'=>'login','controller'=>'users','plugin'=>false,'admin'=>false)); ?></li>
					<?php } ?>
				</ul>
			</nav>	
			<h1>
				<?php echo $this->Html->link("Blog CakePHP", '/'); ?>
			</h1>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
		<?php echo $this->Html->css('syntaxhighlighter/shThemeDefault');?>
		<?php echo $this->Html->css('syntaxhighlighter/shCore'); ?>
		<?php echo $this->Html->script('syntaxhighlighter/src/shCore');?>
		<?php echo $this->Html->script('syntaxhighlighter/src/shAutoloader');?>
		<?php echo $this->Html->script('syntaxhighlighter/shCore');?>
		<?php echo $this->Html->script('syntaxhighlighter/shAutoloader');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushAppleScript');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushAS3');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushBash');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushColdFusion');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushCpp');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushCSharp');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushCss');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushDelphi');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushDiff');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushErlang');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushGroovy');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushJava');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushJavaFX');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushJScript');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushPerl');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushPhp');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushPlain');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushPython');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushRuby');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushSass');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushScala');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushSql');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushVb');?>
		<?php echo $this->Html->script('syntaxhighlighter/shBrushXml');?>
	</div>
	<?php echo $this->fetch('scripts_for_bottom'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
