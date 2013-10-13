<div class="page-content">
	<?php $this->Html->addCrumb('Site Pages', '/sitepages');?>
	<h3><?php echo __('Site Pages Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?></button></h3>

	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('tile'); ?></th>
            <th><?php echo $this->Paginator->sort('language_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sitePages as $sitePage): ?>
	<tr>
		<td><?php echo h($sitePage['SitePage']['title']); ?>&nbsp;</td>
        <td><?php if($sitePage['SitePage']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($sitePage['SitePage']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($sitePage['SitePage']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php if($sitePage['SitePage']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td><?php echo h($sitePage['SitePage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sitePage['SitePage']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sitePage['SitePage']['id']), null, __('Are you sure you want to delete # %s?', $sitePage['SitePage']['id'])); ?>
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

