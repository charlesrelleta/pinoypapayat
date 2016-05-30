<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pinoy Papayat</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url();?>js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/skel.min.js"></script>
		<script src="<?php echo base_url();?>js/skel-layers.min.js"></script>
		<script src="<?php echo base_url();?>js/init.js"></script>

			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/skel.css" />
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style-xlarge.css" />

	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="index.html">PinoyPapayat</a></strong> by FitnessFirst</h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo base_url('Site'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('Site/about'); ?>">About us</a></li>
						<li><a href="<?php echo base_url('Site/contact'); ?>">Contact us</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Calculator</h2>
				<p>Description</p>
			</section>

      <section id="one" class="wrapper style1">
        <div class="container 75%">
          <div class="row 200%">
        <h2>Imperial (US) Method</h2>
        <p><form type="post" action="<?php echo base_url();?>site/imperial_result">
          <label for="pounds">Weight in Pounds lbs</label>
    			     <input type="number" name="pounds" placeholder="Pounds/lbs"    step="any" > <br/><br/>
          <label for="inch">Height in Foot/Feet' Inches"</label>
    			&nbsp<input type="number" name="foot"   placeholder="foot/feet/ft'" step="any" >
          &nbsp<input type="number" name="inch"   placeholder='Inch/Inches/"' step="any" >
          <br/><br/>
    			<button type="submit" id="button">Calculate</button>
    		</form></p>
      </div>
      </div>
      </section>

      <section id="one" class="wrapper style1">
        <div class="container 75%">
          <div class="row 200%">
        <h2>Metric Method</h2>
        <p><form type="post" action="<?php echo base_url();?>site/metric_result">
          <label for="pounds">Weight in Kilograms Kg</label>
    			<input type="number"  step="any"   name="kilogram" placeholder="Kg"> <br/><br/>
            <label for="inch">Height in Meters/Meteres m" </label>
    			<input type="number" step="any" name="meters" placeholder="m">
          <br/><br/>
    			<button type="submit" id="button">Calculate</button>
    		</form></p>
      </div>
      </div>
      </section>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>
	</body>
</html>
