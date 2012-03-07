<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->script(array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js',
			'http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js',
			'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js',
			'/isos/js/core.js',
		));
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				Header
			</h1>
		</div>
		<div id="content">
		<?php 
			echo $this->Session->flash(); 
			echo $content_for_layout; 
		?>
		</div>
		<div id="footer">
			Footer
		</div>
	</div>
<?php
	echo $this->Html->scriptBlock('
		Isos.basePath = "' . $this->Html->url('/isos') . '";
		Isos.baseUrl = "' . $this->Html->url('/isos', true) . '";'
	);
?>
</body>
</html>