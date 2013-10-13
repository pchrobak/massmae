<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Series', '/series');
		  $this->Html->addCrumb('Add Series', '/series/add');?>
	<?php echo $this->Form->create('Series', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Series'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></button></legend>
		<?php
			echo $this->Form->input('visible');
            echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language'));
            echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Series (<small>if applicable</small>)'));
			echo $this->Form->input('series_name', array('class' => 'input-xxlarge'));
			echo $this->Form->input('overview', array('class' => 'ckeditor'));
			echo $this->Form->input('series_image', array('type' => 'file'));
			echo $this->Form->input('photo_dir', array('type' => 'hidden'));
			echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
			echo $this->Form->input('meta_description', array('class' => 'input-mysize-textarea'));
			echo $this->Form->input('meta_keywords', array('class' => 'input-mysize-textarea'));
		?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>


