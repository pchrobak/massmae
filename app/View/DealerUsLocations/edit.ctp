<div class="page-content">
	<?php $this->Html->addCrumb('US & Canadian Locations', '/dealer_us_locations');
	  $this->Html->addCrumb('Edit '.$this->data['DealerUsLocation']['company_name'], '/dealer_us_locations');?>
	
	<fieldset>
		<legend><?php echo __('Edit US & Canadian Dealer Locations'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DealerUsLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DealerLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('DealerUsLocation'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('company_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address1', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address2', array('class' => 'input-xxlarge'));
		echo $this->Form->input('city', array('class' => 'input-xlarge'));
		echo $this->Form->input('state_id', array('class' => 'input-xlarge', 'empty'=>'Select State or Province'));
		echo $this->Form->input('zip', array('class' => 'input-xlarge', 'label'=>'Zip or Postal code'));
		echo $this->Form->input('phone', array('class' => 'input-xlarge'));
		echo $this->Form->input('url', array('class' => 'input-xxlarge'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
