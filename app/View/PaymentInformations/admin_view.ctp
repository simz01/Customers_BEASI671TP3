<div class="paymentInformations view">
<h2><?php echo __('Payment Information'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentInformation['PaymentInformation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($paymentInformation['PaymentInformation']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Number'); ?></dt>
		<dd>
			<?php echo h($paymentInformation['PaymentInformation']['card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Expiry'); ?></dt>
		<dd>
			<?php echo h($paymentInformation['PaymentInformation']['date_of_expiry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security Number'); ?></dt>
		<dd>
			<?php echo h($paymentInformation['PaymentInformation']['security_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Details'); ?></dt>
		<dd>
			<?php echo h($paymentInformation['PaymentInformation']['other_details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Information'), array('action' => 'edit', $paymentInformation['PaymentInformation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Information'), array('action' => 'delete', $paymentInformation['PaymentInformation']['id']), array(), __('Are you sure you want to delete # %s?', $paymentInformation['PaymentInformation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Informations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Information'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($paymentInformation['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Name'); ?></th>
		<th><?php echo __('Customer Phone'); ?></th>
		<th><?php echo __('Customer Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paymentInformation['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['customer_name']; ?></td>
			<td><?php echo $customer['customer_phone']; ?></td>
			<td><?php echo $customer['customer_email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), array(), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
