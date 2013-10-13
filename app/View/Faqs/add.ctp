<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<?php echo $this->Html->script('jquery.picklists.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Faq', '/faqs');
		  $this->Html->addCrumb('Add an FAQ', '/series/faqs');?>
	<?php echo $this->Form->create('Faq'); ?>
		<fieldset>
			<legend><?php echo __('Add an FAQ'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List FAQ\'s'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent FAQ (<small>if applicable</small>)'));
		echo $this->Form->input('Product');
		echo $this->Form->input('question', array('class' => 'input-xxlarge'));
		echo $this->Form->input('answer', array('class' => 'ckeditor'));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
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