<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>	
	
<div class="page-content">
	<?php $this->Html->addCrumb('Series', '/series');
	  $this->Html->addCrumb('Edit '.$this->data['Series']['series_name'], '/series');?>
	
	<fieldset>
		<legend><?php echo __('Edit Series'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Series.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('Series', array('type' => 'file')); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Series (<small>if applicable</small>)'));
		echo $this->Form->input('series_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('overview', array('class'=>'ckeditor'));?>
		<div class="input file">
			<?php echo $this->Html->image('thumbs/thumb_'.$this->data['Series']['series_image'], array('fullBase' => true, 'align'=>'right'));?>
			<label for="SeriesSeriesImage">Series Image</label>
			
			<input type="file" name="data[Series][hero_image]" value="data[Series][hero_image]" id="SeriesSeriesImage"/>
		</div><?php
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-mysize-textarea'));
	?>
	    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
