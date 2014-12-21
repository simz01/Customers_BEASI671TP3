<div class="paymentInformations index">
	<h2><?php echo __('Payment Informations'); ?></h2>
	<table cellpadding="10" cellspacing="5" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('card_number'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_expiry'); ?></th>
			<th><?php echo $this->Paginator->sort('security_number'); ?></th>
			<th><?php echo $this->Paginator->sort('other_details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paymentInformations as $paymentInformation): ?>
	<tr>
		<td><?php echo h($paymentInformation['PaymentInformation']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($paymentInformation['PaymentInformation']['card_number']); ?>&nbsp;</td>
		<td><?php echo h($paymentInformation['PaymentInformation']['date_of_expiry']); ?>&nbsp;</td>
		<td><?php echo h($paymentInformation['PaymentInformation']['security_number']); ?>&nbsp;</td>
		<td><?php echo h($paymentInformation['PaymentInformation']['other_details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paymentInformation['PaymentInformation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paymentInformation['PaymentInformation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paymentInformation['PaymentInformation']['id']), array(), __('Are you sure you want to delete # %s?', $paymentInformation['PaymentInformation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payment Information'), array('action' => 'add')); ?></li>
	</ul>
</div>
