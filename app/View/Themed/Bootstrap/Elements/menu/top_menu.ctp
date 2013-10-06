<?php $current_page = $this->params['action'];?>

<div class="navbar navbar-inverse navbar-fixed-top fluid">
  <div class="navbar-inner">
	<div class="container-fluid">
	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </a>
	  <a class="brand" href="/cms">Base MAE</a>
	  <div class="nav-collapse collapse">
		<div class="btn-group  pull-right">
              <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="icon-white icon-user"></i> Users
                  <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                 <li><a href="<?php echo $this->base?>/users">Manage Users</a></li>
                  <?php if($this->Session->read('Auth.User')){?>
                  <li><a href="<?php echo $this->base?>/users/logout">Logout <?php echo $this->Session->read('Auth.User.username');?></a></li>
                  <?php }?>
              </ul>
          </div>
      </div><!--/.nav-collapse -->
	</div>
  </div>
</div>
</div><br><br>