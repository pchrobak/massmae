<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<?php echo $this->Html->script('jquery.picklists.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Articles', '/articles');
		  $this->Html->addCrumb('Add Article', '/articles/add');?>
	<?php echo $this->Form->create('Article'); ?>
		<fieldset>
			<legend><?php echo __('Add Article'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></button></legend>
		<?php

		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('Product', array('label'=>'Select Products Article is Associated to'));
		echo $this->Form->input('title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('body', array('class' => 'ckeditor'));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#ProductProduct").pickList({
		  buttons: true,
		  beforeFrom: '',
		  beforeTo: '',
		  addText: '>>',
		  addImage: '',
		  removeText: '<<',
		  removeImage: '',
		  ieColor: '',
		  ieBg: '#2b2b2b'
		});	
	});
</script>