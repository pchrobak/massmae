<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
        finder.startupPath = "Images:/";
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
<?php echo $this->Form->create('ProductsFeature'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product Overview'); ?></legend>
	<?php
    echo $this->Form->input('visible');
    echo $this->Form->input('product_id', array('empty' =>'Select Product'));
    echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language'));
    echo $this->Form->input('title', array('class' => 'input-xxlarge'));
    echo $this->Form->input('text', array('class' => 'ckeditor'));?>
        <div class="input text required">
            <label for="ProductsFeatureImage">Image</label>
            <input id="xFilePath" name="data[ProductsFeature][image]" type="text" value="<?php echo $this->data["ProductsFeature"]["image"]?>" class="input-xlarge" id="ProductsFeatureImage">
            <input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
        </div>
        <?php
        echo $this->Form->input('position', array('options' => array('left' => 'Left','right' => 'Right'), 'empty' =>'Select Position'));
        echo $this->Form->input('link', array('class' => 'input-xlarge'));
        echo $this->Form->input('sort');
        ?>
    </fieldset>
    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
    echo $this->Form->end();?>
</div>
