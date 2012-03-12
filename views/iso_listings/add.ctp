<?php
	echo $this->Html->script('/isos/js/views/iso_listings/add');
?>
<div class="isoListings form">
<?php echo $this->Form->create('IsoListing');?>
	<fieldset>
 		<legend><?php __('Add Iso Listing'); ?></legend>
	<?php
		echo $this->Form->input('iso_id', array(
			'type' => 'hidden',
			'value' => $iso['Iso']['id'],
		));
		echo $this->Form->input('Address.country_id', array(
			'type' => 'hidden',
			'value' => $iso['Iso']['country_id'],
		));
		echo $this->Form->input('name');
		echo $this->Form->input('Address.address1');
		echo $this->Form->input('Address.address2');
		echo $this->Form->input('Address.state_id', array(
			'empty' => 'Select a state',
		));
		echo $this->Form->input('Address.city_id');
		echo $this->Form->input('Address.zipcode');
		echo $this->Form->input('url');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description');
		echo $this->Form->input('business_hours');
		echo $this->Form->input('tags', array(
			'label' => 'Keywords (comma separated)'
		));
		echo $this->Form->input('active');
		echo $this->Form->input('category_id')
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Iso Listings', true), array('action' => 'index'));?></li>
	</ul>
</div>