<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
	
	
<div class="page-content">
	<?php $this->Html->addCrumb('Online Dealer Locations', '/dealer_online_locations');
	  $this->Html->addCrumb('Edit '.$this->data['DealerOnlineLocation']['company_name'], '/dealer_online_locations');?>
	
	<fieldset>
		<legend><?php echo __('Edit Location'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DealerOnlineLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DealerOnlineLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('DealerOnlineLocation', array('type' => 'file')); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('company_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address', array('class' => 'ckeditor'));
		echo $this->Form->input('phone', array('class' => 'input-xxlarge'));
		echo $this->Form->input('website', array('class' => 'input-xxlarge'));?>
		<div class="input file">
			<?php echo $this->Html->image('thumbs/thumb_'.$this->data['DealerOnlineLocation']['logo'], array('fullBase' => true, 'align'=>'right'));?>
			<label for="DealerOnlineLocationLogo">Logo Image</label>
			
			<input type="file" name="data[DealerOnlineLocation][logo]" value="data[DealerOnlineLocation][logo]" id="DealerOnlineLocationLogo"/>
		</div><?php
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>


