<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Phone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Email'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adresses'), array('controller' => 'adresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adress'), array('controller' => 'adresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Informations'), array('controller' => 'payment_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Information'), array('controller' => 'payment_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Adresses'); ?></h3>
	<?php if (!empty($customer['Adress'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Line 1 Number Building'); ?></th>
		<th><?php echo __('Line 2 Number Street'); ?></th>
		<th><?php echo __('Line 3 Area Locality'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip Postcode'); ?></th>
		<th><?php echo __('State Province County'); ?></th>
		<th><?php echo __('Iso Country Code'); ?></th>
		<th><?php echo __('Other Adress Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Adress'] as $adress): ?>
		<tr>
			<td><?php echo $adress['id']; ?></td>
			<td><?php echo $adress['line_1_number_building']; ?></td>
			<td><?php echo $adress['line_2_number_street']; ?></td>
			<td><?php echo $adress['line_3_area_locality']; ?></td>
			<td><?php echo $adress['city']; ?></td>
			<td><?php echo $adress['zip_postcode']; ?></td>
			<td><?php echo $adress['state_province_county']; ?></td>
			<td><?php echo $adress['iso_country_code']; ?></td>
			<td><?php echo $adress['other_adress_details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'adresses', 'action' => 'view', $adress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'adresses', 'action' => 'edit', $adress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'adresses', 'action' => 'delete', $adress['id']), array(), __('Are you sure you want to delete # %s?', $adress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Adress'), array('controller' => 'adresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payment Informations'); ?></h3>
	<?php if (!empty($customer['PaymentInformation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Card Number'); ?></th>
		<th><?php echo __('Date Of Expiry'); ?></th>
		<th><?php echo __('Security Number'); ?></th>
		<th><?php echo __('Other Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['PaymentInformation'] as $paymentInformation): ?>
		<tr>
			<td><?php echo $paymentInformation['id']; ?></td>
			<td><?php echo $paymentInformation['payment_method']; ?></td>
			<td><?php echo $paymentInformation['card_number']; ?></td>
			<td><?php echo $paymentInformation['date_of_expiry']; ?></td>
			<td><?php echo $paymentInformation['security_number']; ?></td>
			<td><?php echo $paymentInformation['other_details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payment_informations', 'action' => 'view', $paymentInformation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payment_informations', 'action' => 'edit', $paymentInformation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payment_informations', 'action' => 'delete', $paymentInformation['id']), array(), __('Are you sure you want to delete # %s?', $paymentInformation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Information'), array('controller' => 'payment_informations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
