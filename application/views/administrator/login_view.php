<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Pinoypapayat | Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>calm/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
</head>

  <body>


  <div class="wrapper">
	<div class="container">
	<br><br><br>
		<h2 style="color: white;">Welcome Administrator</h2>
    <?php if (validation_errors()) {
      echo "<div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
".validation_errors() ."
      </div>";
    }  ?>

		<form method="post" action="<?php echo base_url()?>admin/login">

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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


  </body>
</html>
