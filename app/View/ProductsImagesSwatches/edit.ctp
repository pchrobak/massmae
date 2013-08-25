<div class="page-content">
	<?php $this->Html->addCrumb('Product Images', '/products_images_swatches');
	  $this->Html->addCrumb('Edit '.$this->data['ProductsImagesSwatch']['products_filename'], '/products_images_swatches');?>
	
	<fieldset>
		<legend><?php echo __('Edit Product Image'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductsImagesSwatch.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Images'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('ProductsImagesSwatch', array('type' => 'file')); ?>
	<?php	
	
		echo $this->Form->input('product_id', array('empty'=>'Select a Product'));
		echo $this->Form->input('finish_id', array('empty'=>'Select a Finish'));?>
		<div class="input file">
			<label for="ProductsImagesSwatchProductsFilename">Product Image</label>
			<?php echo $this->Html->image('thumbs/thumb_'.$this->data['ProductsImagesSwatch']['products_filename'], array('fullBase' => true, 'vspace' => '5'));?><br>
			<input type="file" name="data[ProductsImagesSwatch][products_filename]"  id="ProductsImagesSwatchProductsFilename"/><br>
			<small>Please Ensure image is 800x600</small>
		</div><?php
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('alt_text');?>
		<?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>