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
	<?php $this->Html->addCrumb('Series', '/series');
	$this->Html->addCrumb('Add Series', '/series/add');?>
	<?php echo $this->Form->create('Download'); ?>
		<fieldset>
			<legend><?php echo __('Add Download'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Downloads'), array('action' => 'index')); ?></button></legend>
		<?php echo $this->Form->input('display_name', array('class' => 'input-xxlarge'));?>
		<div class="input text required">
		<label for="DownloadFilename">Download file</label>
			<input id="xFilePath" name="data[Download][filename]" type="text" class="input-xlarge" id="DownloadFilename">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
