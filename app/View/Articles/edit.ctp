<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<?php echo $this->Html->script('jquery.picklists.js');?>

	
<div class="page-content">
	<?php $this->Html->addCrumb('Article', '/articles');
	  $this->Html->addCrumb('Edit '.$this->data['Article']['title'], '/series');?>
	
	<fieldset>
		<legend><?php echo __('Edit Article'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Article.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Article.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('Article'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Article (<small>if applicable</small>)'));
		echo $this->Form->input('Product', array('label'=>'Select Products Article is Associated to'));
		echo $this->Form->input('title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('body', array('class' => 'ckeditor'));
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

