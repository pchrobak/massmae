<div class="page-content">
	<?php $this->Html->addCrumb('Registered Products', '/registered_products');
	  $this->Html->addCrumb('Edit '.$this->data['RegisteredProduct']['serial'], '/registered_products');?>
	
	<fieldset>
		<legend><?php echo __('Edit Registered Product'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegisteredProduct.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RegisteredProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Registered Products'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('RegisteredProduct'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('registered_member_id',array('empty' => 'Select a Member'));
		echo $this->Form->input('product_id',array('empty' => 'Select a Product'));
		echo $this->Form->input('serial');
		echo $this->Form->input('purchase_date');
		echo $this->Form->input('dealer_name');
	?>
	    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>

