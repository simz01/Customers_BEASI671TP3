<div class="paymentInformations form">
<?php echo $this->Form->create('PaymentInformation'); ?>
	<fieldset>
		<legend><?php echo __('Add Payment Information'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
                echo $this->Form->input('subcategory_id');
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
		<li><?php echo $this->Html->link(__('List Adresses'), array('controller' => 'adresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adress'), array('controller' => 'adresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
$this->Js->get('#PaymentInformationCategoryId')->event('click', 
$this->Js->request(array(
'controller'=>'subcategories',
'action'=>'getByCategory'
), array(
'update'=>'#PaymentInformationCategoryId',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>
