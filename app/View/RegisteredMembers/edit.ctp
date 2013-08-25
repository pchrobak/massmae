<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
<?php echo $this->Html->script('jquery.picklists.js');?>
<div class="page-content">
	<?php $this->Html->addCrumb('Members', '/registered_members');
	  $this->Html->addCrumb('Edit '.$this->data['RegisteredMember']['email'], '/registered_members');?>
	
	<fieldset>
		<legend><?php echo __('Edit Member'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegisteredMember.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RegisteredMember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#details" data-toggle="tab" class="active">Product Details</a></li>
	  <li><a href="#reg_product" data-toggle="tab" class="active">Registered Products</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade" id="details">
		<?php echo $this->Form->create('RegisteredMember'); ?>
			<fieldset><br>
			<?php
				echo $this->Form->input('id');
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
				echo $this->Form->submit('Submit', array('class' => 'btn'));?>
		</fieldset>
	</div>
	
	<!--CONTENT FOR REGISTERED PRODUCTS-->
	<div class="tab-pane" id="reg_product">
		<h4>Registered Products<small>(<?php echo $this->Html->link('Add more registered products', array('controller' => 'registered_products', 'action' => 'add')); ?>)</small></h4>
		<?php 
			//var_dump(($this->data["RegisteredProduct"]));
		foreach ($this->data["RegisteredProduct"] as $regproduct){
			echo $this->Html->link($regproduct['serial'], array('controller' => 'registered_products', 'action' => 'edit', $regproduct['id']))."<br>";?>
			<?php }?>
	</div>
	
	
</div>
<script>
  $(function () {
    $('#myTab a:first').tab('show');
  })
</script>