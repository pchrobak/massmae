<style type="text/css">
      /* Override some defaults for a special login page */
      .container {
        width: 300px !important;
		margin:auto;
      }
</style>
<div class="container">
<h3>Base MAE</h3>
	<div class="login-form">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<div class="clearfix">
					 <?php echo $this->Form->input('username');?>
				</div>
				<div class="clearfix">
					 <?php echo  $this->Form->input('password')?>
				</div>
				<button class="btn btn-primary" type="submit">Sign in</button>
			</fieldset>
		</form>
		<small>Trouble logging in? <a href="mailto:test@test.com">Contact Us</a>
	</div>
	</div>