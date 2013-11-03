<div class="page-content">
    <?php $this->Html->addCrumb('Categories', '/categories');?>
    <h3><?php echo __('Site Configuration'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('Edit Configuration'), array('action' => 'edit/1')); ?></button></h3>

	<dl>
		<dt><?php echo __('Site Name'); ?></dt>
		<dd>
			<?php echo h($config['Config']['site_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title Apend'); ?></dt>
		<dd>
			<?php echo h($config['Config']['title_apend']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Default Meta Title'); ?></dt>
        <dd>
            <?php echo h($config['Config']['default_meta_title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Default Meta Title'); ?></dt>
        <dd>
            <?php echo h($config['Config']['default_meta_description']); ?>
            &nbsp;
        </dd>
		<dt><?php echo __('Contact Email'); ?></dt>
		<dd>
			<?php echo h($config['Config']['contact_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($config['Config']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($config['Config']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Google Plus'); ?></dt>
		<dd>
			<?php echo h($config['Config']['google_plus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vimeo'); ?></dt>
		<dd>
			<?php echo h($config['Config']['vimeo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube'); ?></dt>
		<dd>
			<?php echo h($config['Config']['youtube']); ?>
			&nbsp;
		</dd>
	</dl>
</div>