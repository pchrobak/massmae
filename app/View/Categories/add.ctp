<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Category', '/categories');
		  $this->Html->addCrumb('Add Category', '/categories/add');?>
<?php echo $this->Form->create('Category', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Category'), array('action' => 'index')); ?></button></legend>
	<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('show_in_footer');
		echo $this->Form->input('subcategory', array('type'=>'select', 'options' => $subcat, 'empty' => 'Select subcategory if applicable','class' => 'input-xlarge'));
		echo $this->Form->input('name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('overview_image', array('type' => 'file'));
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('overview', array('class' => 'ckeditor'));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
