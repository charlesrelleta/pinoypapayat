
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pinoypapayat</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url();?>js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/skel.min.js"></script>
		<script src="<?php echo base_url();?>js/skel-layers.min.js"></script>
		<script src="<?php echo base_url();?>js/init.js"></script>

		<link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/skel.css" />
		<link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style-xlarge.css"/>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="<?php echo base_url();?>Site">Pinoypapayat</a></strong> by FitnessFirst</h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo base_url('Site'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('Site/about'); ?>">About us</a></li>
						<li><a href="<?php echo base_url('Site/bmi_calculator'); ?>">BMI Calculator</a></li>
						<li><a href="<?php echo base_url('Site/tips_and_suggestions'); ?>">Tips and Suggestions</a></li>
						<li><a href="<?php echo base_url('Site/contact'); ?>">Contact us</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<section id="one" class="wrapper style2">
	        <div class="container 75%">
	          <div class="row 200%">
							<?php foreach ($content as $cont): ?>
								<?php echo "<h2>".$cont->title."</h2><br/>";?>
								<?php echo "<p>".$cont->description."</p><br/>";?>
				        <?php echo "<b><p>".$cont->tips."</p></b><br/>";?>
							<?php endforeach; ?>

	      		</div>
		      </div>
	      </section>

	      <section id="one" class="wrapper style1">
	        <div class="container 75%">
	          <div class="">
							<center>
	    			<h3>BMI Chart</h3>
	    		<img src="<?php echo base_url();?>images/bmi_chart.png">
	    		</center>

	      		</div>
		      </div>
	      </section>






				</div>

			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">

					<ul class="copyright">
						<li>&copy; Pinoypapayat</li>
					</ul>
				</div>
			</footer>

	</body>
</html>
