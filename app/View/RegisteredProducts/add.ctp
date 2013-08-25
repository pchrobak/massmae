<div class="page-content">
	<?php $this->Html->addCrumb('Registered Products', '/registered_products');
		  $this->Html->addCrumb('Add Registered Product', '/registered_products/add');?>
	<?php echo $this->Form->create('RegisteredProduct'); ?>
		<fieldset>
			<legend><?php echo __('Add Registered Product'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Registered Products'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('registered_member_id',array('empty' => 'Select a Member'));
		echo $this->Form->input('product_id',array('empty' => 'Select a Product'));
		echo $this->Form->input('serial');
		echo $this->Form->input('purchase_date');
		echo $this->Form->input('dealer_name');
	?>
	</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>

