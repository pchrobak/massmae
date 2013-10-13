<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<div class="page-content">
	<?php $this->Html->addCrumb('Professional Reviews', '/professional_reviews');
		  $this->Html->addCrumb('Add Professional Review', '/professional_review/add');?>
	<?php echo $this->Form->create('ProfessionalReview'); ?>
		<fieldset>
			<legend><?php echo __('Add Professional Review'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Professional Reviews'), array('action' => 'index')); ?></button></legend>
		<?php
			echo $this->Form->input('visible');
            echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
            echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Review (<small>if applicable</small>)'));
			echo $this->Form->input('product_id', array('empty'=>'Select a Product'));
            echo $this->Form->input('review_title', array('class'=>'input-xxlarge'));
			echo $this->Form->input('author', array('class'=>'input-xxlarge'));
			echo $this->Form->input('publication', array('class'=>'input-xxlarge'));
			echo $this->Form->input('reference_date');
			echo $this->Form->input('link', array('class'=>'input-xxlarge'));
			echo $this->Form->input('pull_quote', array('class'=>'ckeditor'));
	?>
		</fieldset>
		<?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
