<div class="isos index">
	<h2><?php __('Isos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($isos as $iso):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $iso['Iso']['name']; ?>&nbsp;</td>
		<td><?php echo $iso['Iso']['slug']; ?>&nbsp;</td>
		<td><?php echo $iso['Iso']['active']; ?>&nbsp;</td>
		<td><?php echo $iso['Iso']['created']; ?>&nbsp;</td>
		<td><?php echo $iso['Iso']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $iso['Iso']['id'])); ?>
			<?php echo $this->Html->link(__('View Listings', true), array('controller' => 'iso_listings', 'action' => 'index', $iso['Iso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $iso['Iso']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $iso['Iso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iso['Iso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Iso', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Iso Users', true), array('controller' => 'iso_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso User', true), array('controller' => 'iso_users', 'action' => 'add')); ?> </li>
	</ul>
</div>