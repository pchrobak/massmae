<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<?php echo $this->Html->script('jquery.picklists.js');?>
<script type="text/javascript">
    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
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
	<?php $this->Html->addCrumb('Products', '/products');
		  $this->Html->addCrumb('Add Product', '/products/add');?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Product'), array('action' => 'index')); ?></button></legend>
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#details" data-toggle="tab" class="active">Product Details</a></li>
	  <li><a href="#specs" data-toggle="tab">Product Specs</a></li>
	  <li><a href="#downloads" data-toggle="tab">Product Downloads</a></li>
	  <li><a href="#related_products" data-toggle="tab">Related Products</a>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade" id="details">
			<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('visible');
				//echo $this->Form->input('featured');
				echo $this->Form->input('show_price');
                echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
                echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Product (<small>if applicable</small>)'));
				echo $this->Form->input('name', array('class' => 'input-xxlarge'));
				//echo $this->Form->input('series_id',array('empty' => 'Select a Series'));
				//echo $this->Form->input('Category');
				echo $this->Form->input('quick_description', array('class' => 'input-xxlarge'));
				//echo $this->Form->input('body_copy', array('class' => 'ckeditor'));
                echo $this->Form->input('compatibility', array('class' => 'ckeditor'));
				echo $this->Form->input('priced_per', array('class' => 'input-xlarge', 'options'=> array('each'=>'each','pair'=>'pair','system'=>'system'), 'empty'=>'Select Unit of Measure', 'label'=>'Unit Of Measure'));
				echo $this->Form->input('msrp_usd', array('class' => 'input-xlarge'));
				echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
				echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
				echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
			</fieldset>
		</div>
		
		<!--CONTENT FOR SPECS-->
		<div class="tab-pane" id="specs">
		<h5>Specifications</h5>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('specs', array('class' => 'ckeditor', 'label'=>''));?>
                <div class="input text required">
                    <label for="ProductsUserGuide">User Guide</label>
                    <input id="xFilePath" name="data[Product][user_guide]" type="text" class="input-xlarge" id="ProductsUserGuide">
                    <input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
                </div>
                <?php
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
			
			</fieldset>
		</div>

		<!--CONTENT FOR DOWNLOADS-->
		<div class="tab-pane" id="downloads">
		<h5>Downloads</h5>
			<fieldset>
			<?php
				echo $this->Form->input('Download', array('label'=>''));
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
			</fieldset>
		</div>
		
		<!--CONTENT FOR RELATED PRODUCTS-->
		<div class="tab-pane" id="related_products">
		<br>
			<fieldset>
			<?php
				echo $this->Form->input('Ingredient', array('label'=>'Select Related Products'));
				echo $this->Form->submit('Submit', array('class' => 'btn'));
				echo $this->Form->end();?>
			</fieldset>
		</div>
	</div>
</div>
<script>
  $(function () {
    $('#myTab a:first').tab('show');
	
	$("#DownloadDownload").pickList({
		  buttons: true,
		  beforeFrom: '',
		  beforeTo: '',
		  addText: '>>',
		  addImage: '',
		  removeText: '<<',
		  removeImage: '',
		  ieColor: '',
		  ieBg: '#2b2b2b'
		});
		
	$("#IngredientIngredient").pickList({
		  buttons: true,
		  beforeFrom: '',
		  beforeTo: '',
		  addText: '>>',
		  addImage: '',
		  removeText: '<<',
		  removeImage: '',
		  ieColor: '',
		  ieBg: '#2b2b2b'
		});	
		
	$("#CategoryCategory").pickList({
		  buttons: true,
		  beforeFrom: '',
		  beforeTo: '',
		  addText: '>>',
		  addImage: '',
		  removeText: '<<',
		  removeImage: '',
		  ieColor: '',
		  ieBg: '#2b2b2b'
		});	
	
	$("#FinishFinish").pickList({
		  buttons: true,
		  beforeFrom: '',
		  beforeTo: '',
		  addText: '>>',
		  addImage: '',
		  removeText: '<<',
		  removeImage: '',
		  ieColor: '',
		  ieBg: '#2b2b2b'
		});	
  })
</script>

