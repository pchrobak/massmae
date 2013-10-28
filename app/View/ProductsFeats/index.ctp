<div class="page-content">
    <?php $this->Html->addCrumb('Product Features', '/products_feats');?>
    <h3><?php echo __('Product Overview Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Feature'), array('action' => 'add')); ?></button></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Product Overview'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('language'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productsFeats as $productsFeat): ?>
	<tr>
		<td><?php echo h($productsFeat['ProductsFeat']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productsFeat['ProductFeature']['title'], array('controller' => 'products_features', 'action' => 'edit', $productsFeat['ProductFeature']['id'])); ?>
		</td>
        <td><?php if($productsFeat['ProductFeature']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
        <td><?php if($productsFeat['ProductsFeat']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($productsFeat['ProductsFeat']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($productsFeat['ProductsFeat']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php echo h($productsFeat['ProductsFeat']['title']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsFeat['ProductsFeat']['id'])); ?> |
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsFeat['ProductsFeat']['id']), null, __('Are you sure you want to delete # %s?', $productsFeat['ProductsFeat']['id'])); ?>
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
