
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
						<h2>	Your Body Mass Index is <?php $bmi =  round($bmi_result,2); echo $bmi?></h2>
						<br/><br/>
				    <img src="<?php echo base_url();?>images/bmi.jpg" name="chart">
<br/><br/><br/><br/><br/><br/><br/><br/>
						<h1>~Asian BMI Chart</h1>
<br/><br/>

						All anthropometric data (height in meters and weight in kilograms) were extracted from the clinical nutrition database of St. Luke’s Medical Center, Quezon City, Philippines, which was a Microsoft Access© 2000 program, covering the period from years 2000 to 2003 (Phase 1) and the second period from the years 2006 to 2007 (Phase 2). For comparison purposes the database of the Weight Management Center was also included. These were then converted to BMI and grouped to their corresponding nutritional status using the WHO criteria and “Asian Criteria” (Table 1).
The collected values were plotted to form a graph using the Microsoft Excel© 2000 and the graph patterns of the years 2000 to 2003, years 2006 to 2007, and Weight Management Center were analyzed as to which of the two criteria comes up with the normal “bell shaped” curve or pattern depicting the “normal” population distribution [10]. A normal distribution of a given population has the following characteristics: an inverted “bell-shaped” pattern, symmetrical pattern for the 95% portion under the curve and 5% portion on both ends of the curve. If there is a preponderance of overweight/obese patients (or bigger values) compared to the underweights (or smaller values) i.e. the mean is greater than the median, the curve would be “skewed to the right” and if there were more underweight patients (or lesser values) compared to the overweight/obese (or bigger values) i.e. the mean is smaller than the median, then the curve would be “skewed to the left”. This pattern is reflective of an appropriate assignment of “cut- off” values. If the values show a pattern that is not of an inverted bell (or symmetrical pattern) then it means the assigned “cut- off” values are not appropriate.
					</div>
				</div>
			</section>
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
