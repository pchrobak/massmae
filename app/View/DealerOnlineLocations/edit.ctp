<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
        finder.startupPath = "Files:/";
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
        echo $this->Form->input('country_id', array('class' => 'input-xlarge', 'empty'=>'Select a Country','label'=>'Country'));
		echo $this->Form->input('address', array('class' => 'ckeditor'));
		echo $this->Form->input('phone', array('class' => 'input-xxlarge'));
		echo $this->Form->input('website', array('class' => 'input-xxlarge'));?>
        <div class="input text required">
            <label for="DealerOnlineLocationLogo">Publication image</label>
            <input id="xFilePath" name="data[DealerOnlineLocation][logo]" type="text" value="<?php echo $this->data["DealerOnlineLocation"]["logo"]?>" class="input-xlarge" id="DealerOnlineLocationLogo">
            <input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
        </div>
		<?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>


