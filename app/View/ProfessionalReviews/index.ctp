<div class="page-content">
	<?php $this->Html->addCrumb('Downloads', '/downloads');?>
	<h3><?php echo __('Professional Reviews Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Professional Review'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('language_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('publication'); ?></th>
			<th><?php echo $this->Paginator->sort('reference_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($professionalReviews as $professionalReview): ?>
	<tr>
		<td><?php echo h($professionalReview['ProfessionalReview']['id']); ?>&nbsp;</td>
        <td><?php if($professionalReview['ProfessionalReview']['language_id'] == 1){?><img src='img/english.png'>
            <?php }else if($professionalReview['ProfessionalReview']['language_id'] == 2){?><img src='img/french.png'>
            <?php }else if($professionalReview['ProfessionalReview']['language_id'] == 3){?><img src='img/german.png'><?php }?>
        </td>
		<td><?php if($professionalReview['ProfessionalReview']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>
		<td>
			<?php echo $this->Html->link($professionalReview['Product']['name'], array('controller' => 'products', 'action' => 'view', $professionalReview['Product']['id'])); ?>
		</td>
		<td><?php echo h($professionalReview['ProfessionalReview']['publication']); ?>&nbsp;</td>
		<td><?php echo h($professionalReview['ProfessionalReview']['reference_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $professionalReview['ProfessionalReview']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $professionalReview['ProfessionalReview']['id']), null, __('Are you sure you want to delete # %s?', $professionalReview['ProfessionalReview']['id'])); ?>
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
