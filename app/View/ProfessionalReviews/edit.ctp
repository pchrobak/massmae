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
	<?php $this->Html->addCrumb('Professional Reviews', '/ProfessionalReview');
	  $this->Html->addCrumb('Edit', '/professional_reviews');?>
	
	<fieldset>
		<legend><?php echo __('Edit Professional Reviews'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProfessionalReview.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Professional Reviews'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('ProfessionalReview'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
        echo $this->Form->input('featured');
        echo $this->Form->input('language_id', array('options' => array('1' => 'English','2' => 'French','3' => 'German'), 'empty' =>'Select Language', 'label'=>'Language'));
        echo $this->Form->input('parents', array('empty' => 'Select a Parent', 'label'=>'Parent Review (<small>if applicable</small>)'));
		echo $this->Form->input('product_id', array('empty'=>'Select a Product'));
        echo $this->Form->input('review_title', array('class'=>'input-xxlarge'));
		echo $this->Form->input('author', array('class'=>'input-xxlarge'));
		echo $this->Form->input('publication', array('class'=>'input-xxlarge'));?>
        <div class="input text required">
            <label for="ProfessionalReviewPubimage">Publication image</label>
            <input id="xFilePath" name="data[ProfessionalReview][pubimage]" value="<?php echo $this->data["ProfessionalReview"]["pubimage"]?>" type="text" class="input-xlarge" id="ProfessionalReviewPubimage">
            <input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
        </div>
		<?php echo $this->Form->input('reference_date');
		echo $this->Form->input('link', array('class'=>'input-xxlarge'));
		echo $this->Form->input('pull_quote', array('class'=>'ckeditor'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
