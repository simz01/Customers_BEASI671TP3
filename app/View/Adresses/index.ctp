<div class="adresses index">
	<h2><?php echo __('Adresses'); ?></h2>
	<table cellpadding="10" cellspacing="5" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('line_1_number_building'); ?></th>
			<th><?php echo $this->Paginator->sort('line_2_number_street'); ?></th>
			<th><?php echo $this->Paginator->sort('line_3_area_locality'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('state_province_county'); ?></th>
			<th><?php echo $this->Paginator->sort('iso_country_code'); ?></th>
			<th><?php echo $this->Paginator->sort('other_adress_details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($adresses as $adress): ?>
	<tr>
		<td><?php echo h($adress['Adress']['line_1_number_building']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['line_2_number_street']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['line_3_area_locality']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['city']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['zip_postcode']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['state_province_county']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['iso_country_code']); ?>&nbsp;</td>
		<td><?php echo h($adress['Adress']['other_adress_details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adress['Adress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adress['Adress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adress['Adress']['id']), array(), __('Are you sure you want to delete # %s?', $adress['Adress']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Adress'), array('action' => 'add')); ?></li>
	</ul>
</div>
