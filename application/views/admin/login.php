<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Find House | Administrator Login</title>
      <link rel="stylesheet" href="<?php echo base_url('asset/css/style3.css'); ?>">


</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Administrator Login</h1>

		<form class="form" action="<?=base_url();?>admin/admin_signin/checklogin" method="post">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>

	</ul>
</div>
  <script src="<?php echo base_url('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');?>"></script>

    <script src="<?php echo base_url('js/index.js'); ?>"></script>

</body>
</html>
