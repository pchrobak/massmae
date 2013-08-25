<div class="page-content">
	<?php $this->Html->addCrumb('US & Canadian Locations', '/dealer_us_locations');?>
	<h3><?php echo __('US & Canadian Dealer Locations Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('address1'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dealerUsLocations as $dealerUsLocation): ?>
	<tr>
		<td><?php echo h($dealerUsLocation['DealerUsLocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($dealerUsLocation['DealerUsLocation']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($dealerUsLocation['DealerUsLocation']['address1']); ?>&nbsp;</td>
		<td><?php echo h($dealerUsLocation['DealerUsLocation']['city']); ?>&nbsp;</td>
		<td><?php echo $dealerUsLocation['State']['name'];?></td>
		<td><?php if($dealerUsLocation['DealerUsLocation']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dealerUsLocation['DealerUsLocation']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dealerUsLocation['DealerUsLocation']['id']), null, __('Are you sure you want to delete # %s?', $dealerUsLocation['DealerUsLocation']['id'])); ?>
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

