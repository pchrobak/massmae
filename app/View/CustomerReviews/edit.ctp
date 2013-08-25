<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

	
<div class="page-content">
	<?php $this->Html->addCrumb('Customer Reviews', '/customer_reviews');
	  $this->Html->addCrumb('Edit '.$this->data['CustomerReview']['title'], '/customer_reviews');?>
	
	<fieldset>
		<legend><?php echo __('Edit Customer Reviews'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomerReview.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CustomerReview.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Reviews'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('CustomerReview'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('validated');
		echo $this->Form->input('visible');
		echo $this->Form->input('product_id', array('class'=>'input-xlarge'));
		echo $this->Form->input('email', array('class'=>'input-xxlarge'));
		echo $this->Form->input('rating', array('class' => 'input-xlarge', 'options'=> array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'), 'empty'=>'Select a Rating'));
		echo $this->Form->input('title', array('class'=>'input-xxlarge'));
		echo $this->Form->input('review', array('class'=>'ckeditor'));
	?>
	    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>

