<div class="page-content">
	<?php $this->Html->addCrumb('Finishes', '/finishes');?>
	<h3><?php echo __('Finishes Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Finish'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('language_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($finishes as $finish): ?>
	<tr>
		<td><?php echo h($finish['Finish']['id']); ?>&nbsp;</td>
        <td><?php if($finish['Finish']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($finish['Finish']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($finish['Finish']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php echo h($finish['Finish']['name']); ?>&nbsp;</td>
		<td><?php echo h($finish['Finish']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $finish['Finish']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $finish['Finish']['id']), null, __('Are you sure you want to delete # %s?', $finish['Finish']['id'])); ?>
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
