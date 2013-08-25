<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
	function BrowseServer()
	{
		// You can use the "CKFinder" class to render CKFinder in a page:
		var finder = new CKFinder();
		finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
		finder.startupPath = "Files:/dealers/logos";
		finder.selectActionFunction = SetFileField;
		finder.popup();
	}

	// This is a sample function which is called when a file is selected in CKFinder.
	function SetFileField( fileUrl )
	{
		document.getElementById( 'xFilePath' ).value = fileUrl;
	}
</script>
<div class="page-content">
	<?php $this->Html->addCrumb('International Dealer Locations', '/dealer_international_locations');
		  $this->Html->addCrumb('Add Location', '/dealer_international_locations/add');?>
	<?php echo $this->Form->create('DealerInternationalLocation'); ?>
		<fieldset>
			<legend><?php echo __('Add Location'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></button></legend>
		<?php
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
