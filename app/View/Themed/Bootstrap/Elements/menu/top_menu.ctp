<?php $current_page = $this->params['action'];?>

<div class="navbar navbar-inverse navbar-fixed-top fluid">
  <div class="navbar-inner">
	<div class="container-fluid">
	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </a>
	  <a class="brand" href="/cms">AudioQuest MAE</a>
	  <div class="nav-collapse collapse">
		<p class="navbar-text pull-right">
		 <?php if($this->Session->read('Auth.User')){?>
			<a id="login-info" href="<?php echo $this->base?>/users/logout"><button type="button" class="btn btn-inverse"> <i class="icon-white icon-user"></i> logout <?php echo $this->Session->read('Auth.User.username');?></button></a>
		 <?php }?>
		</p>
	  </div><!--/.nav-collapse -->
	</div>
  </div>
</div>
</div><br><br>