<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
	
	
<div class="page-content">
	<?php $this->Html->addCrumb('Finishes', '/finishes');
	  $this->Html->addCrumb('Edit '.$this->data['Finish']['name'], '/finishes');?>
	
	<fieldset>
		<legend><?php echo __('Edit Finish'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Finish.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Finishes'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('Finish', array('type' => 'file')); ?>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Finish (<small>if applicable</small>)'));
		echo $this->Form->input('name', array('class'=>'input-xxlarge'));?>
		<div class="input file">
			<label for="FinishImage">Finish Image</label><br>
			<?php echo $this->Html->image($this->data['Finish']['filename'], array('fullBase' => true, 'vspace'=>'5'));?><br>
			<input type="file" name="data[Finish][filename]" value="data[Finish][filename]" id="FinishImage"/><br>
			<small>Please Ensure image is 30x30</small>
		</div><?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
