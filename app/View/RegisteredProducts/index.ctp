<div class="page-content">
	<?php $this->Html->addCrumb('Registered Products', '/registered_products');?>
	<h3><?php echo __('Registered Products Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Registered Product'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_member_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('serial'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
			<th><?php echo $this->Paginator->sort('dealer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($registeredProducts as $registeredProduct): ?>
	<tr>
		<td><?php echo h($registeredProduct['RegisteredProduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registeredProduct['RegisteredMember']['email'], array('controller' => 'registered_members', 'action' => 'edit', $registeredProduct['RegisteredMember']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registeredProduct['Product']['name'], array('controller' => 'products', 'action' => 'edit', $registeredProduct['Product']['id'])); ?>
		</td>
		<td><?php echo h($registeredProduct['RegisteredProduct']['serial']); ?>&nbsp;</td>
		<td><?php echo h($registeredProduct['RegisteredProduct']['purchase_date']); ?>&nbsp;</td>
		<td><?php echo h($registeredProduct['RegisteredProduct']['dealer_name']); ?>&nbsp;</td>
		<td><?php echo h($registeredProduct['RegisteredProduct']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $registeredProduct['RegisteredProduct']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $registeredProduct['RegisteredProduct']['id']), null, __('Are you sure you want to delete # %s?', $registeredProduct['RegisteredProduct']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
</div>
