<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Online Dealer Locations', '/dealer_online_locations');
		  $this->Html->addCrumb('Add Location', '/dealer_online_locations/add');?>
	<?php echo $this->Form->create('DealerOnlineLocation', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Location'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('company_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address', array('class' => 'ckeditor'));
		echo $this->Form->input('phone', array('class' => 'input-xxlarge'));
		echo $this->Form->input('website', array('class' => 'input-xxlarge'));
		echo $this->Form->input('logo', array('type' => 'file'));
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
