<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
<?php echo $this->Html->script('jquery.picklists.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Products', '/products');
	  $this->Html->addCrumb('Edit '.$this->data["Product"]["name"], '/products');?>
	<fieldset>
		<legend><?php echo "Edit ".$this->data["Product"]["name"]; ?>
			<div class="btn-group pull-right">
				<?php echo $this->Html->link('Preview '.$this->data["Product"]["name"], PRODUCTPREVIEWURL.$this->data["Product"]["prod_directory"], array('class' => 'btn', 'target' => '_blank'));?>
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>
		
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#details" data-toggle="tab" class="active">Product Details</a></li>
	  <li><a href="#product-images" data-toggle="tab" class="active">Product Images</a></li>
	  <li><a href="#specs" data-toggle="tab">Product Specs</a></li>
	  <li><a href="#downloads" data-toggle="tab">Product Downloads</a></li>
	  <li><a href="#related_products" data-toggle="tab">Related Products</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade" id="details">
			<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('visible');
				echo $this->Form->input('featured');
				echo $this->Form->input('show_price');
                echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'German','3' => 'French'), 'empty' =>'Select Language'));
                echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Product (<small>if applicable</small>)'));
				echo $this->Form->input('name', array('class' => 'input-xxlarge'));
				echo $this->Form->input('series_id',array('empty' => 'Select a Series'));
				echo $this->Form->input('Category');
				echo $this->Form->input('quick_description', array('class' => 'input-xxlarge'));
				echo $this->Form->input('body_copy', array('class' => 'ckeditor'));
				echo $this->Form->input('priced_per', array('class' => 'input-xlarge', 'options'=> array('each'=>'each','pair'=>'pair','system'=>'system'), 'empty'=>'Select Unit of Measure', 'label'=>'Unit Of Measure'));
				echo $this->Form->input('msrp_usd', array('class' => 'input-xlarge'));
				echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
				echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
				echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
			
			</fieldset>
		</div>
		
		<!--CONTENT FOR PRODUCT IMAGES-->
		<div class="tab-pane" id="product-images">
			<h4>Product Images<small>(<?php echo $this->Html->link('Add more product images', array('controller' => 'products_images_swatches', 'action' => 'add')); ?>)</small></h4>
			<?php foreach ($this->data["ProductsImagesSwatch"] as $prodimage){
				echo $this->Html->image('thumbs/thumb_'.$prodimage['products_filename'], array('fullBase' => true, 'vspace' => '5'));	
			}?>
			<h4>Gallery Images<small>(<?php echo $this->Html->link('Add more gallery images', array('controller' => 'products_images', 'action' => 'add')); ?>)</small></h4>
			<?php foreach ($this->data["ProductsImage"] as $prodgalleryimage){
				echo $this->Html->image('thumbs/small_'.$prodgalleryimage['filename'], array('fullBase' => true, 'vspace' => '5'));	
			}?>
		</div>
		
		<!--CONTENT FOR SPECS-->
		<div class="tab-pane" id="specs">
		<h5><?php echo $this->data["Product"]["name"];?> Specifications</h5>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('specs', array('class' => 'ckeditor', 'label'=>''));
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
			
			</fieldset>
		</div>
		
		<!--CONTENT FOR DOWNLOADS-->
		<div class="tab-pane" id="downloads">
		<h5><?php echo $this->data["Product"]["name"];?> Downloads</h5>
			
			<fieldset>
			<?php
				echo $this->Form->input('Download', array('label'=>''));
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
			</fieldset>
		</div>
		
		<!--CONTENT FOR RELATED PRODUCTS-->
		<div class="tab-pane" id="related_products"><br>
			
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
  })
</script>