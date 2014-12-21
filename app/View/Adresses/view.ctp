<div class="adresses view">
<h2><?php echo __('Adress'); ?></h2>
	<dl>
		<dt><?php echo __('Line 1 Number Building'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['line_1_number_building']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Line 2 Number Street'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['line_2_number_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Line 3 Area Locality'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['line_3_area_locality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Postcode'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['zip_postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Province County'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['state_province_county']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso Country Code'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['iso_country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Adress Details'); ?></dt>
		<dd>
			<?php echo h($adress['Adress']['other_adress_details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adress'), array('action' => 'edit', $adress['Adress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adress'), array('action' => 'delete', $adress['Adress']['id']), array(), __('Are you sure you want to delete # %s?', $adress['Adress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Adress'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($adress['Customer'])): ?>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
		<th><?php echo __('Customer Name'); ?></th>
		<th><?php echo __('Customer Phone'); ?></th>
		<th><?php echo __('Customer Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($adress['Customer'] as $customer): ?>
		<tr>
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
