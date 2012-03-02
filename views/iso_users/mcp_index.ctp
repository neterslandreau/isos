<div class="isoUsers index">
	<h2><?php __('Iso Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('iso_id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('passwd');?></th>
			<th><?php echo $this->Paginator->sort('password_token');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('email_authenticated');?></th>
			<th><?php echo $this->Paginator->sort('email_token');?></th>
			<th><?php echo $this->Paginator->sort('email_token_expires');?></th>
			<th><?php echo $this->Paginator->sort('tos');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('last_login');?></th>
			<th><?php echo $this->Paginator->sort('last_activity');?></th>
			<th><?php echo $this->Paginator->sort('is_admin');?></th>
			<th><?php echo $this->Paginator->sort('role');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($isoUsers as $isoUser):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $isoUser['IsoUser']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($isoUser['Iso']['name'], array('controller' => 'isos', 'action' => 'view', $isoUser['Iso']['id'])); ?>
		</td>
		<td><?php echo $isoUser['IsoUser']['username']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['slug']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['passwd']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['password_token']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['email']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['email_authenticated']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['email_token']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['email_token_expires']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['tos']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['active']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['last_login']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['last_activity']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['is_admin']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['role']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['created']; ?>&nbsp;</td>
		<td><?php echo $isoUser['IsoUser']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $isoUser['IsoUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $isoUser['IsoUser']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $isoUser['IsoUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $isoUser['IsoUser']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Iso User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Isos', true), array('controller' => 'isos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso', true), array('controller' => 'isos', 'action' => 'add')); ?> </li>
	</ul>
</div>