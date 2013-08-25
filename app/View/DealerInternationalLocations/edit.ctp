<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
	
	
<div class="page-content">
	<?php $this->Html->addCrumb('International Dealer Locations', '/dealer_international_locations');
	  $this->Html->addCrumb('Edit '.$this->data['DealerInternationalLocation']['company_name'], '/dealer_international_locations');?>
	
	<fieldset>
		<legend><?php echo __('Edit Location'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DealerInternationalLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DealerInternationalLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('DealerInternationalLocation'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('type', array('class' => 'input-xlarge', 'options'=> array('international'=>'International Dealer','distributor'=>'International Distributor'), 'empty'=>'Select Type of International Dealer', 'label'=>'Unit Of Measure'));
		echo $this->Form->input('company_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address', array('class' => 'ckeditor'));
		echo $this->Form->input('phone', array('class' => 'input-xxlarge'));
		echo $this->Form->input('website', array('class' => 'input-xxlarge'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>

