<div class="isoListings index">
	<h2><?php __('Iso Listings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('iso_id');?></th>
			<th><?php echo $this->Paginator->sort('address_id');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('city_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('short_description');?></th>
			<th><?php echo $this->Paginator->sort('long_description');?></th>
			<th><?php echo $this->Paginator->sort('keywords');?></th>
			<th><?php echo $this->Paginator->sort('business_hours');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($isoListings as $isoListing):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $isoListing['IsoListing']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($isoListing['Iso']['name'], array('controller' => 'isos', 'action' => 'view', $isoListing['Iso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($isoListing['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $isoListing['Address']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($isoListing['State']['name'], array('controller' => 'states', 'action' => 'view', $isoListing['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($isoListing['City']['name'], array('controller' => 'cities', 'action' => 'view', $isoListing['City']['id'])); ?>
		</td>
		<td><?php echo $isoListing['IsoListing']['name']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['slug']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['url']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['phone']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['fax']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['short_description']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['long_description']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['keywords']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['business_hours']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['active']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['created']; ?>&nbsp;</td>
		<td><?php echo $isoListing['IsoListing']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $isoListing['IsoListing']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $isoListing['IsoListing']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $isoListing['IsoListing']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $isoListing['IsoListing']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Iso Listing', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Isos', true), array('controller' => 'isos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso', true), array('controller' => 'isos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States', true), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State', true), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>