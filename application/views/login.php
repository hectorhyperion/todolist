
<!DOCTYPE html>
<html lang="zxx">

<head>
<title>To do list login</title>
<!-- Meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- //Meta tags -->
<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css')?>" type="text/css" media="all" /><!-- Style-CSS -->
<link href="<?php echo site_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
<link href="<?php echo site_url('assets/css/bootstrap.css')?>" rel="stylesheet"> 
</head>
<body>
	<section class="w3l-form-36">
	<div class="form-36-mian section-gap">
	<div class="wrapper">
	<div class="form-inner-cont">
	<h3>Login now</h3>


	<?php echo form_open('login/verify'); ?>
	 
	<?php if($this->session->flashdata('login_failed'))
					{
						?>
					<div class="alert alert-danger" role="alert">
						<?php
						echo $this->session->flashdata('login_failed');
						?>
					</div>
					<?php 

						}


					 ?>
					
		 	 
	<div class="form-input">
		
		<span class="fa fa-envelope-o" aria-hidden="true"></span> <input type="email" name="email"
			placeholder="Username"  />
	</div>
	<span  style="font-size: small; color:darkred;"><?php echo form_error('email');?></span>

	<div class="form-input">
		<span class="fa fa-key" aria-hidden="true"></span> <input type="password" name="password" placeholder="Password"
				/>
	</div>
	<span style="font-size: small; color:darkred;"><?php echo form_error('password');?></span>
	<div class="login-remember d-grid">
		<label class="check-remaind">
			<input type="checkbox">
			
		</label>
		<button class="btn theme-button" style="text-align:center">Login</button>
	</div>
		
	</form>


</div>
</section>
</body>

</html>