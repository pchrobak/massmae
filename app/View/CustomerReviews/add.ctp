<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<div class="page-content">
	<?php $this->Html->addCrumb('Customer Reviews', '/customer_reviews');
		  $this->Html->addCrumb('Add a Customer Review', '/customer_reviews/add');?>
	<?php echo $this->Form->create('CustomerReview'); ?>
		<fieldset>
			<legend><?php echo __('Add a Customer Reviews'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('visible');
        echo $this->Form->input('featured');
		echo $this->Form->input('product_id', array('class'=>'input-xlarge','empty'=>'Select a Product'));
		echo $this->Form->input('email', array('class'=>'input-xxlarge'));
		echo $this->Form->input('rating', array('class' => 'input-xlarge', 'options'=> array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'), 'empty'=>'Select a Rating'));
		echo $this->Form->input('title', array('class'=>'input-xxlarge'));
		echo $this->Form->input('review', array('class'=>'ckeditor'));
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
