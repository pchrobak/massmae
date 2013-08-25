<div class="page-content">
	<?php $this->Html->addCrumb('Customer Reviews', '/customer_reviews');?>
	<h3><?php echo __('Customer Reviews Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Customer Review'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('validated'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customerReviews as $customerReview): ?>
	<tr>
		<td><?php echo h($customerReview['CustomerReview']['id']); ?>&nbsp;</td>
		<td><?php if($customerReview['CustomerReview']['validated'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td><?php if($customerReview['CustomerReview']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td>
			<?php echo $this->Html->link($customerReview['Product']['name'], array('controller' => 'products', 'action' => 'view', $customerReview['Product']['id'])); ?>
		</td>
		<td><?php echo h($customerReview['CustomerReview']['email']); ?>&nbsp;</td>
		<td><?php echo h($customerReview['CustomerReview']['rating']); ?>&nbsp;</td>
		<td><?php echo h($customerReview['CustomerReview']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerReview['CustomerReview']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerReview['CustomerReview']['id']), null, __('Are you sure you want to delete # %s?', $customerReview['CustomerReview']['id'])); ?>
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

