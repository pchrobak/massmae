<div class="page-content">
    <?php $this->Html->addCrumb('Product Overviews', '/product_features');?>
    <h3><?php echo __('Product Overview Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Feature'), array('action' => 'add')); ?></button></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productsFeatures as $productsFeature): ?>
	<tr>
		<td><?php echo h($productsFeature['ProductsFeature']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productsFeature['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsFeature['Product']['id'])); ?>
		</td>
		<td><?php echo h($productsFeature['ProductsFeature']['link']); ?>&nbsp;</td>
		<td><?php echo h($productsFeature['ProductsFeature']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsFeature['ProductsFeature']['id'])); ?> |
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsFeature['ProductsFeature']['id']), null, __('Are you sure you want to delete # %s?', $productsFeature['ProductsFeature']['id'])); ?>
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

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>