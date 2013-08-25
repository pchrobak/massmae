<div class="page-content">
	<?php $this->Html->addCrumb('Product Images', '/products_images_swatches');?>
	<h3><?php echo __('Product Images Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Prodct Image'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('finish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>		
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productsImagesSwatches as $productsImagesSwatch): ?>
	<tr>
		<td><?php echo h($productsImagesSwatch['ProductsImagesSwatch']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productsImagesSwatch['Product']['name'], array('controller' => 'products', 'action' => 'edit', $productsImagesSwatch['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productsImagesSwatch['Finish']['name'], array('controller' => 'finishes', 'action' => 'edit', $productsImagesSwatch['Finish']['id'])); ?>
		</td>
		<td><?php echo h($productsImagesSwatch['ProductsImagesSwatch']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsImagesSwatch['ProductsImagesSwatch']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsImagesSwatch['ProductsImagesSwatch']['id']), null, __('Are you sure you want to delete # %s?', $productsImagesSwatch['ProductsImagesSwatch']['id'])); ?>
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
