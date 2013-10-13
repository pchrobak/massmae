<div class="page-content">
	<?php $this->Html->addCrumb('Downloads', '/downloads');?>
	<h3><?php echo __('Download Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Download'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('language'); ?></th>
			<th><?php echo $this->Paginator->sort('display_name'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($downloads as $download): ?>
	<tr>
		<td><?php echo h($download['Download']['id']); ?>&nbsp;</td>
        <td><?php if($download['Download']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($download['Download']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($download['Download']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php echo h($download['Download']['display_name']); ?>&nbsp;</td>
		<td><?php echo h($download['Download']['filename']); ?>&nbsp;</td>
		<td><?php echo h($download['Download']['modified']); ?>&nbsp;</td>
		<td><?php echo h($download['Download']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $download['Download']['id'])); ?> |
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $download['Download']['id']), null, __('Are you sure you want to delete # %s?', $download['Download']['id'])); ?>
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

