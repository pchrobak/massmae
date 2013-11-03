<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
    <?php $this->Html->addCrumb('Config', '/configs');
    $this->Html->addCrumb('Edit ', '/configs');?>

    <fieldset>
        <legend><?php echo __('Edit Configuration'); ?>
            <div class="btn-group pull-right">
                <button class="btn">Actions</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Back to View'), array('action' => 'index')); ?></li></ul>
            </div>
        </legend>
        <?php echo $this->Form->create('Config'); ?>
        <fieldset>
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('site_name');
            echo $this->Form->input('title_apend');
            echo $this->Form->input('default_meta_title');
            echo $this->Form->input('default_meta_description');
            echo $this->Form->input('contact_email');
            echo $this->Form->input('facebook');
            echo $this->Form->input('twitter');
            echo $this->Form->input('google_plus');
            echo $this->Form->input('vimeo');
            echo $this->Form->input('youtube');
            echo $this->Form->submit('Submit', array('class' => 'btn'));
            echo $this->Form->end();?>
        </fieldset>
</div
