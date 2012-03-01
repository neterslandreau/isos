<div class="isos view">
<h2><?php  __('Iso');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iso['Iso']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iso['Iso']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slug'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iso['Iso']['slug']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iso['Iso']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iso['Iso']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iso['Iso']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Iso', true), array('action' => 'edit', $iso['Iso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Iso', true), array('action' => 'delete', $iso['Iso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iso['Iso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Isos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Iso Users', true), array('controller' => 'iso_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iso User', true), array('controller' => 'iso_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Iso Users');?></h3>
	<?php if (!empty($iso['IsoUser'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Iso Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Slug'); ?></th>
		<th><?php __('Passwd'); ?></th>
		<th><?php __('Password Token'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Email Authenticated'); ?></th>
		<th><?php __('Email Token'); ?></th>
		<th><?php __('Email Token Expires'); ?></th>
		<th><?php __('Tos'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Last Login'); ?></th>
		<th><?php __('Last Activity'); ?></th>
		<th><?php __('Is Admin'); ?></th>
		<th><?php __('Role'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($iso['IsoUser'] as $isoUser):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $isoUser['id'];?></td>
			<td><?php echo $isoUser['iso_id'];?></td>
			<td><?php echo $isoUser['username'];?></td>
			<td><?php echo $isoUser['slug'];?></td>
			<td><?php echo $isoUser['passwd'];?></td>
			<td><?php echo $isoUser['password_token'];?></td>
			<td><?php echo $isoUser['email'];?></td>
			<td><?php echo $isoUser['email_authenticated'];?></td>
			<td><?php echo $isoUser['email_token'];?></td>
			<td><?php echo $isoUser['email_token_expires'];?></td>
			<td><?php echo $isoUser['tos'];?></td>
			<td><?php echo $isoUser['active'];?></td>
			<td><?php echo $isoUser['last_login'];?></td>
			<td><?php echo $isoUser['last_activity'];?></td>
			<td><?php echo $isoUser['is_admin'];?></td>
			<td><?php echo $isoUser['role'];?></td>
			<td><?php echo $isoUser['created'];?></td>
			<td><?php echo $isoUser['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'iso_users', 'action' => 'view', $isoUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'iso_users', 'action' => 'edit', $isoUser['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'iso_users', 'action' => 'delete', $isoUser['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $isoUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Iso User', true), array('controller' => 'iso_users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
