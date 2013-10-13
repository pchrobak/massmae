<div class="page-content">
	<?php $this->Html->addCrumb('Homepage Hero Spots', '/hero_spots');?>
	<h3><?php echo __('Hero Spots Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Spot'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('language_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($heroSpots as $heroSpot): ?>
	<tr>
		<td><?php echo h($heroSpot['HeroSpot']['id']); ?>&nbsp;</td>
        <td><?php if($heroSpot['HeroSpot']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($heroSpot['HeroSpot']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($heroSpot['HeroSpot']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php echo h($heroSpot['HeroSpot']['title']); ?>&nbsp;</td>
		<td><?php if($heroSpot['HeroSpot']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td><?php echo h($heroSpot['HeroSpot']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $heroSpot['HeroSpot']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $heroSpot['HeroSpot']['id']), null, __('Are you sure you want to delete # %s?', $heroSpot['HeroSpot']['id'])); ?>
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
