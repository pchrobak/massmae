<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Site Pages', '/sitepages');
		  $this->Html->addCrumb('Add Page', '/sitepages/add');?>
	<?php echo $this->Form->create('SitePage'); ?>
		<fieldset>
			<legend><?php echo __('Add Series'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('page_text', array('class' => 'ckeditor'));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div
