<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Finishes', '/finishes');
	$this->Html->addCrumb('Add Finish', '/finish/add');?>
	<?php echo $this->Form->create('Finish', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add a Finish'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Finishes'), array('action' => 'index')); ?></button></legend>
		<?php
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Finish (<small>if applicable</small>)'));
		echo $this->Form->input('name', array('class'=>'input-xxlarge'));?>
		<div class="input file">
			<label for="FinishFilename">Finish Image</label>
			<input type="file" name="data[Finish][filename]"  id="FinishFilename"/><br>
			<small>Please Ensure image is 30x30</small>
		</div>
		<?php echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
