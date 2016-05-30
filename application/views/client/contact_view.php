
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
		
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css" />

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Pinoypapayat</a></strong> by FitnessFirst</h1>
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
					<?php foreach($content as $cont): ?>
					<header class="major special">
						<h2>	<?php echo $cont->title;?></h2>
						<p><?php echo $cont->description;?></p>
					</header>

		<div class="container">

            <div >
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-sm-5 ">
                            <div class="spacer">
                                <div >
                                    <br><br>
                                    <p><h5>	<?php echo $cont->tel_title;?></h5><?php echo $cont->telephone;?><br>
                                        <h5><br><?php echo $cont->cel_title;?></h5> <?php echo $cont->cellphone;?><br>
                                        <h5><br><?php echo $cont->email_title;?></h5><?php echo $cont->email;?><br>
                                        <h5><br></h5>
                                    </p>
                                </div>
                            </div>

																	<?php endforeach;?>
                        </div>
                        <div class="col-sm-5">


                                <h3>Location</h3>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.2678723338863!2d121.08612289999999!3d14.697437799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0cbd8d8667%3A0xf92008edb5ddc15b!2sSTEVE+St%2C+Novaliches%2C+Quezon+City%2C+Metro+Manila!5e0!3m2!1sen!2sph!4v1430121399325" width="600" height="450" frameborder="0" style="border:0"></iframe>

                        </div>
                    </div>
                </div>

            </div>
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
