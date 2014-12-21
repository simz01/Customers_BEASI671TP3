<div class="paymentInformations form">
<?php echo $this->Form->create('PaymentInformation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Payment Information'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('card_number');
		echo $this->Form->input('date_of_expiry');
		echo $this->Form->input('security_number');
		echo $this->Form->input('other_details');
		echo $this->Form->input('Customer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PaymentInformation.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PaymentInformation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Adresses'), array('controller' => 'adresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adress'), array('controller' => 'adresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Informations'), array('controller' => 'payment_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Information'), array('controller' => 'payment_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
