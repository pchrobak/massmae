<div class="page-content">
	<?php $this->Html->addCrumb('International Dealer Locations', '/dealer_international_locations');?>
	<h3><?php echo __('International Dealer Locations'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dealerInternationalLocations as $dealerInternationalLocation): ?>
	<tr>
		<td><?php echo h($dealerInternationalLocation['DealerInternationalLocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($dealerInternationalLocation['DealerInternationalLocation']['type']); ?>&nbsp;</td>
		<td><?php echo h($dealerInternationalLocation['DealerInternationalLocation']['company_name']); ?>&nbsp;</td>
		<td><?php if($dealerInternationalLocation['DealerInternationalLocation']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td><?php echo h($dealerInternationalLocation['DealerInternationalLocation']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dealerInternationalLocation['DealerInternationalLocation']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dealerInternationalLocation['DealerInternationalLocation']['id']), null, __('Are you sure you want to delete # %s?', $dealerInternationalLocation['DealerInternationalLocation']['id'])); ?>
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