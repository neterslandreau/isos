<?php
	if ($role == 'agent') :
?>
<h1>Welcome Agent</h1>
<ul>
	<li>
		<?php
			echo $this->Html->link('View Listings', array(
				'action' => 'listings', $iso_id,
			));
		?>
	</li>
	<li>
		<?php
			echo $this->Html->link('Add New Listing', array(
				'action' => 'add',
			));
		?>
	</li>
</ul>
<?php
	else :
?>
<h1>Welcome Admin</h1>
<ul>
	<li>
		<?php
			echo $this->Html->link('Agent Manager', array(
				'controller' => 'isos',
				'action' => 'agent_manager',
			));
		?>
	</li>
</ul>
<?php
	endif;
?>
