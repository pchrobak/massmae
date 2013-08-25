<div class="page-content">
	<?php $this->Html->addCrumb('Gallery Images', '/products_images');
	  $this->Html->addCrumb('Edit '.$this->data['ProductsImage']['filename'], '/series');?>
	
	<fieldset>
		<legend><?php echo __('Edit Image'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductsImage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductsImage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('ProductsImage', array('type' => 'file')); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');?>
		<div class="input file">
			<label for="FilenameImage">Image</label><br>
			<?php echo $this->Html->image('thumbs/small_'.$this->data['ProductsImage']['filename'], array('fullBase' => true, 'vspace'=>'5'));?>
			<input type="file" name="data[ProductsImage][filname]" value="data[ProductsImage][filname]" id="FilenameImage"/><br>
			<small>Please Ensure image is 800x600</small>
		</div><?php
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('alt_description');
	?>
	    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
