<div class="page-content">
    <?php $this->Html->addCrumb('Translations', '/sitetranslations');
    $this->Html->addCrumb('Edit '.$this->data['SiteTranslation']['phrase_1'], '/sitetranslations');?>

    <?php echo $this->Form->create('SiteTranslation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Site Translation'); ?></legend>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('phrase_1', array('label'=>'Phrase'));
        echo $this->Form->input('phrase_2', array('label'=>'French'));
        echo $this->Form->input('phrase_3', array('label'=>'German'));
	?>
	</fieldset>
    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
    echo $this->Form->end();?>
</div>

