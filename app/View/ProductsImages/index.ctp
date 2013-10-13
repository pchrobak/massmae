<div class="page-content">
	<?php $this->Html->addCrumb('Gallery Images', '/products_images');?>
	<h3><?php echo __('Gallery Images'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">

	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></td>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productsImages as $productsImage): ?>
	<tr>
		<td><?php echo h($productsImage['ProductsImage']['id']); ?>&nbsp;</td>
		<td><?php echo h($productsImage['ProductsImage']['filename']); ?>&nbsp;</td>
		<td><?php echo h($productsImage['ProductsImage']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsImage['ProductsImage']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsImage['ProductsImage']['id']), null, __('Are you sure you want to delete # %s?', $productsImage['ProductsImage']['id'])); ?>
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
