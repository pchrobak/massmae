<div class="page-content">
	<?php $this->Html->addCrumb('Gallery Images', '/products_images');
		  $this->Html->addCrumb('Add Image', '/products_images/add');?>
	<?php echo $this->Form->create('ProductsImage', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Image'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('product_id', array('empty'=>'Select a Product'));?>
		<div class="input file">
			<label for="ProductsImageFilename">Filename</label>
			<input type="file" name="data[ProductsImage][filename]"  id="ProductsImageFilename"/><br>
			<small>Please Ensure image is 800x600</small>
		</div>
		<?php echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('alt_description');
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>

