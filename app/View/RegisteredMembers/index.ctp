<div class="page-content">
	<?php $this->Html->addCrumb('Members', '/registered_members');?>
	<h3><?php echo __('Members Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('optin_promotions'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($registeredMembers as $registeredMember): ?>
	<tr>
		<td><?php echo h($registeredMember['RegisteredMember']['id']); ?>&nbsp;</td>
		<td><?php if($registeredMember['RegisteredMember']['optin_promotions'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td><?php echo h($registeredMember['RegisteredMember']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($registeredMember['RegisteredMember']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($registeredMember['RegisteredMember']['email']); ?>&nbsp;</td>
		<td><?php echo h($registeredMember['RegisteredMember']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $registeredMember['RegisteredMember']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $registeredMember['RegisteredMember']['id']), null, __('Are you sure you want to delete # %s?', $registeredMember['RegisteredMember']['id'])); ?>
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
