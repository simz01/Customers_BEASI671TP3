<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_name');
		echo $this->Form->input('customer_phone');
		echo $this->Form->input('customer_email');
		echo $this->Form->input('Adress');
		echo $this->Form->input('PaymentInformation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Customer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Adresses'), array('controller' => 'adresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adress'), array('controller' => 'adresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Informations'), array('controller' => 'payment_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Information'), array('controller' => 'payment_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
