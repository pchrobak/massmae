<div class="page-content">
    <?php $this->Html->addCrumb('Site Translations', '/sitetranslations');?>
    <h3><?php echo __('Translations Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Translation'), array('action' => 'add')); ?></button></h3>

    <table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Phrase'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($siteTranslations as $siteTranslation): ?>
	<tr>
		<td><?php echo h($siteTranslation['SiteTranslation']['id']); ?>&nbsp;</td>
		<td><?php echo h($siteTranslation['SiteTranslation']['phrase_1']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $siteTranslation['SiteTranslation']['id'])); ?> |
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $siteTranslation['SiteTranslation']['id']), null, __('Are you sure you want to delete # %s?', $siteTranslation['SiteTranslation']['id'])); ?>
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

