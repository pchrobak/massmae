<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Categories', '/categories');
	  $this->Html->addCrumb('Edit '.$this->Form->value('Category.name'), '/categories');?>
	
	<fieldset>
		<legend><?php echo __('Edit Category'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>
<?php echo $this->Form->create('Category', array('type' => 'file')); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('show_in_footer');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Category (<small>if applicable</small>)'));
		echo $this->Form->input('subcategory', array('type'=>'select', 'options' => $subcat, 'empty' => 'Select subcategory if applicable','class' => 'input-xlarge'));

		echo $this->Form->input('name', array('class' => 'input-xxlarge'));?>
		<div class="input file">
			<?php echo $this->Html->image('thumbs/thumb_'.$this->data['Category']['overview_image'], array('fullBase' => true, 'align'=>'right'));?>
			<label for="CategoryOverviewImage">Overview Image</label>
			
			<input type="file" name="data[Category][overview_image]" value="data[Category][overview_image]" id="CategoryOverviewImage"/>
		</div><?php echo $this->Form->input('overview', array('class' => 'ckeditor'));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>