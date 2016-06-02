
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
		<script src="<?php echo base_url();?>js/pinterest.js"></script>

		<link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style-xlarge.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style-pinterest.css" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">

		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/demo.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/sidebar-left.css">


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

			<div class="main-content">

			<aside class="sidebar-left">

		<br><br>
		<div class="sidebar-links">
			<a class="link-yellow" href="<?php echo base_url();?>site/tips_and_suggestions"><i class="fa fa-coffee"></i>Breakfast</a>
			<a class="link-red selected" href="<?php echo base_url();?>site/lunch"><i class="fa fa-cutlery"></i>Lunch</a>
			<a class="link-blue" href="<?php echo base_url();?>site/dinner"><i class="fa fa-moon-o"></i>Dinner</a>
			<a class="link-green" href="<?php echo base_url();?>site/random"><i class="fa fa-random"></i>Random</a>
		</div>

	</aside>


    <h3 align="center">Tips &#38; Suggestions</h3>
		<!-- Main -->
			<section id="main" class="wrapper">
			<div class="container">
			<div class="row">

    <section id="pinBoot">
    	<?php if(isset($content)){
              foreach($content as $cont): ?>
      <article class="white-panel">
        <h4><?php echo $cont->title;?></h4>
        <h5 style="color: gray;"><?php echo $cont->description; ?></h5>
        <p style="color: gray; font-family: times new roman; font-variant-caps: initial;"><?php
				$mycontent = $cont->content;

				$var = strlen($mycontent);
if ($var >= 300) {
	$rest = substr($mycontent, 0,300);
	echo $rest, "... <a href='",base_url(),"site/goto_post/",$cont->_id,"' style='color:blue'>READ MORE</a>";
}else {
	echo $mycontent;
}

				 ?></p>
      </article>
      <?php endforeach;}
                 else { ?>
                 <script> alert("Empty!");</script>
                  <?php }?>


    </section>


    <hr>

    </div>


  </div>

</div>
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
	<script>

		$(function () {

			var links = $('.sidebar-links > a');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			})
		});

	</script>

	</body>
</html>
