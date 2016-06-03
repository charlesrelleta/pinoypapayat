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
				<h1><strong><a href="<?php echo base_url();?>Site">PinoyPapayat</a></strong> by FitnessFirst</h1>
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

		<!-- Banner -->
		<?php foreach($content as $cont): ?>
			<section id="banner">
				<h2><?php echo $cont->title;?></h2>
				<p><?php echo $cont->description;?></p>

			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">

								<p class="major">
									<?php echo $cont->post_title;?>
								</p>

								<?php echo $cont->post_description;?>
								</div>
								<br>
								<a href="#" class="image fit"><img src="<?php echo base_url();?>images/pic09.jpg" alt="" /></a>
					</div>
				</section>


<?php endforeach;?>
<section id="one" class="wrapper style1">
	<div class="container 75%">
		<div class="row 200%">

				<p class="major">
					Norma O. Chikiamco wrote in the Philippine Daily Inquirer, “I feel disheartened every time I hear people extol the virtues of Asian cuisine. Most likely they'd be referring to Japanese, Thai, Vietnamese, Indonesian or Chinese food; just as likely there won't be any mention of Filipino food. As if it isn't hard enough being called the Sad Sack of Asia, they have to snub our cuisine too. Is Filipino food meant to be loved by no one else but us? Source: Norma O. Chikiamco, Philippine Daily Inquirer, July 6, 2008

				</p>

				</div>
				<br>
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
function myFunction() {
    window.open("<?php echo base_url('Site/calculator');?>", "_blank",
		"toolbar=no,scrollbars=no,resizable=no,top=50,left=400,width=490,height=600");
}
</script>
	</body>
</html>
