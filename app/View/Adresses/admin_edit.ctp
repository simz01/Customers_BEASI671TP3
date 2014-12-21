<div class="adresses form">
<?php echo $this->Form->create('Adress'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Adress'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('line_1_number_building');
		echo $this->Form->input('line_2_number_street');
		echo $this->Form->input('line_3_area_locality');
		echo $this->Form->input('city');
		echo $this->Form->input('zip_postcode');
		echo $this->Form->input('state_province_county');
		echo $this->Form->input('iso_country_code');
		echo $this->Form->input('other_adress_details');
		echo $this->Form->input('Customer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Adress.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Adress.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Adresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
