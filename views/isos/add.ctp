<div class="isos form">
<?php echo $this->Form->create('Iso');?>
	<fieldset>
		<legend><?php __('Add Iso'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Isos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Iso Users', true), array('controller' => 'iso_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso User', true), array('controller' => 'iso_users', 'action' => 'add')); ?> </li>
	</ul>
</div>