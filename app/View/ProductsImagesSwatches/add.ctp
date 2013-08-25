<div class="page-content">
	<?php $this->Html->addCrumb('Product Images', '/products_images_swatches');
		  $this->Html->addCrumb('Add Product Image', '/products_images_swatches/add');?>
	<?php echo $this->Form->create('ProductsImagesSwatch', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Product Image'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Product Images'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('product_id', array('empty'=>'Select a Product'));
		echo $this->Form->input('finish_id', array('empty'=>'Select a Finish'));?>
		<div class="input file">
			<label for="ProductsImagesSwatchProductsFilename">Product Image</label>
			<input type="file" name="data[ProductsImagesSwatch][products_filename]"  id="ProductsImagesSwatchProductsFilename"/><br>
			<small>Please Ensure image is 800x600</small>
		</div><?php
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('alt_text');?>
		
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div
