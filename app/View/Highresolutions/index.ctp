<div class="page-content">
	<?php $this->Html->addCrumb('Downloads', '/downloads');?>
	<h3><?php echo __('High Resolution Images Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('alt_text'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($highresolutions as $highresolution): ?>
	<tr>
		<td><?php echo h($highresolution['Highresolution']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($highresolution['Product']['name'], array('controller' => 'products', 'action' => 'view', $highresolution['Product']['id'])); ?>
		</td>
		<td><?php echo h($highresolution['Highresolution']['short_description']); ?>&nbsp;</td>
		 <td><?php if($highresolution['Highresolution']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($highresolution['Highresolution']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($highresolution['Highresolution']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php echo h($highresolution['Highresolution']['alt_text']); ?>&nbsp;</td>
		<td><?php echo h($highresolution['Highresolution']['updated']); ?>&nbsp;</td>
		<td><?php echo h($highresolution['Highresolution']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $highresolution['Highresolution']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $highresolution['Highresolution']['id']), null, __('Are you sure you want to delete # %s?', $highresolution['Highresolution']['id'])); ?>
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
