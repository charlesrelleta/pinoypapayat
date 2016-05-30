<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Pinoypapayat | Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>calm/css/style.css">
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
	<br><br><br>
		<h1>Welcome Administrator</h1>

    <?php echo validation_errors(); ?>
		<form class="form" method="POST" action="<?php echo base_url();?>admin/verify_registration">
      <br><br><br>
  			<input type="text"     placeholder="Username"         name="username"         >
  			<input type="password" placeholder="Password"         name="password"         >
        <input type="password" placeholder="Confirm Password" name="confirmpassword" >
      <br>
        <input type="text" placeholder="First Name"     name="firstname" >
        <input type="text" placeholder="Middle Name"    name="middlename">
        <input type="text" placeholder="Last Name"      name="lastname"  >
        <input type="text" placeholder="License Number" name="license"   >
        <select class="ui dropdown" name= "gender" >
          <option value="">Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <input type="date"  name="birthdate">
        <input type="email" name="email"        placeholder="Email">
        <input type="text"  name="profession"   placeholder="Profession">
      <button type="submit" id="button">Login</button>
		</form>
	</div>

	<ul class="bg-bubbles">
		<?php for ($i=0; $i < 10; $i++) {
	  echo "<li></li>";
		}
    ?>
	</ul>
</div>
    <script src='<?php echo base_url();?>js/jquery.min.js'></script>
    <script src="<?php echo base_url();?>calm/js/index.js"></script>
</body>
</html>
