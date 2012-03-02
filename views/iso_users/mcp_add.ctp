<div class="isoUsers form">
<?php echo $this->Form->create('IsoUser');?>
	<fieldset>
 		<legend><?php __('Mcp Add Iso User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('passwd');
		echo $this->Form->input('password_token');
		echo $this->Form->input('email');
		echo $this->Form->input('is_admin');
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Iso Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Isos', true), array('controller' => 'isos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso', true), array('controller' => 'isos', 'action' => 'add')); ?> </li>
	</ul>
</div>