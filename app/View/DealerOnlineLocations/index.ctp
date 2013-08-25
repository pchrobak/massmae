<div class="page-content">
	<?php $this->Html->addCrumb('Online Dealer Locations', '/dealer_online_locations');?>
	<h3><?php echo __('Online Dealer Locations'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dealerOnlineLocations as $dealerOnlineLocation): ?>
	<tr>
		<td><?php echo h($dealerOnlineLocation['DealerOnlineLocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($dealerOnlineLocation['DealerOnlineLocation']['company_name']); ?>&nbsp;</td>
		<td><?php if($dealerOnlineLocation['DealerOnlineLocation']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td><?php echo h($dealerOnlineLocation['DealerOnlineLocation']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dealerOnlineLocation['DealerOnlineLocation']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dealerOnlineLocation['DealerOnlineLocation']['id']), null, __('Are you sure you want to delete # %s?', $dealerOnlineLocation['DealerOnlineLocation']['id'])); ?>
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
