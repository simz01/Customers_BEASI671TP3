<div class="customers form">
<?php echo $this->Form->create('Customer', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('customer_name');
		echo $this->Form->input('customer_phone');
		echo $this->Form->input('customer_email');
		echo $this->Form->input('Adress');
		echo $this->Form->input('PaymentInformation');
	?>
	<?php if (!empty($this->data['Customer']['filepath'])): ?>
                <div class="input">
                        <label>Uploaded File</label>
                        <?php
                        echo $this->Form->input('filepath', array('type'=>'hidden'));
                        echo $this->Html->link(basename($this->data['Customer']['filepath']), $this->data['Customer']['filepath']);
                        ?>
                </div>
        <?php else: ?>
        <?php echo $this->Form->input('filename',array(
                'type' => 'file'
        )); ?>
        <?php endif; ?>
 
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Adresses'), array('controller' => 'adresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adress'), array('controller' => 'adresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Informations'), array('controller' => 'payment_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Information'), array('controller' => 'payment_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
