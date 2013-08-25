<div class="page-content">
	<?php $this->Html->addCrumb('Member', '/registered_members');
		  $this->Html->addCrumb('Add Member', '/registered_members/add');?>
	<?php echo $this->Form->create('RegisteredMember'); ?>
		<fieldset>
			<legend><?php echo __('Add Member'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('optin_promotions');
		echo $this->Form->input('password');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('address');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state_id',array('empty' => 'Select a State'));
		echo $this->Form->input('zip');
		echo $this->Form->input('birthday', array('minYear'=>'1920', 'maxYear'=>'2000'));
		echo $this->Form->input('email');
	?>
	</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>

