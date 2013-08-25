<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Homepage Hero Spots', '/hero_spots');
		  $this->Html->addCrumb('Add Spot', '/hero_spots/add');?>
	<?php echo $this->Form->create('HeroSpot', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Spot'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('sort');
		echo $this->Form->input('title', array('class'=>'input-xxlarge'));
		?>	
		<div class="input file">
			<label for="HeroSpotHeroImage">Hero Image</label>
			<input type="file" name="data[HeroSpot][hero_image]"  id="HeroSpotHeroImage"/><br>
			<small>Please Ensure image is 960x500</small>
		</div>
		
		<?php
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('link', array('class'=>'input-xxlarge'));
	    echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
