<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
    <?php echo $this->Form->create('ProductsFeat'); ?>
    <fieldset>
        <legend><?php echo __('Add a Product Feature'); ?></legend>
        <?php
        echo $this->Form->input('visible');
		echo $this->Form->input('product_feature_id');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language'));;
        echo $this->Form->input('title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('body', array('class' => 'ckeditor'));
		echo $this->Form->input('sort');?>
        </fieldset>
    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
    echo $this->Form->end();?>
</div>
