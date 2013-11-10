<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
function BrowseServer()
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();
	var finder = new CKFinder();
	finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.startupPath = "downloads";
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
	<?php $this->Html->addCrumb('High Resolution Images', '/highresolutions');
	$this->Html->addCrumb('Add Image', '/highresolutions/add');?>
	<?php echo $this->Form->create('Highresolution'); ?>
	<fieldset>
		<legend><?php echo __('Add Image'); ?></legend>
	<?php
		 echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
		echo $this->Form->input('product_id', array('empty'=>'Select a Product'));
		echo $this->Form->input('short_description');?>
		<div class="input text required">
		<label for="HighresolutionImage">Download file</label>
			<input id="xFilePath" name="data[Highresolution][image]" type="text" class="input-xlarge" id="HighresolutionImage">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>
		<?php echo $this->Form->input('alt_text');
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
