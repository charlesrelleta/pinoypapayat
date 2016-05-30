<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Pinoypapayat | Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>calm/css/style.css">
</head>
<<<<<<< HEAD

  <body>
=======
  <body>


  <div class="wrapper">
	<div class="container">
	<br><br><br>
		<h1>Welcome Administrator</h1>

  <?php echo validation_errors(); ?>
		<form method="post" action="<?php echo base_url()?>admin/login">

<br><br><br>
			<input type="text"     name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="button">Login</button>
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
    <script src='<?php echo base_url();?>js/jquery.min.js'></script>

        <script src="<?php echo base_url();?>calm/js/index.js"></script>




  </body>
</html>
