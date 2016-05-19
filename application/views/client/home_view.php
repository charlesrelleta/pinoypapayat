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
		<?php foreach($content as $cont): ?>
			<section id="banner">
				<h2><?php echo $cont->title;?></h2>
				<p><?php echo $cont->description;?></p>
				<ul class="actions">
					<li><a onclick="myFunction()" class="button special big">Know your BMI</a></li>
				</ul>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">

								<p class="major">
									<?php echo $cont->post_title;?>
								</p>

								<?php echo $cont->post_description;?>
								<script type="text/javascript" id="WolframAlphaScripta1a8ae551f0cc35c2291116d7d9ff5a" src="//www.wolframalpha.com/widget/widget.jsp?id=a1a8ae551f0cc35c2291116d7d9ff5a"></script>
								<script type="text/javascript" id="WolframAlphaScript2f1e0f79bf8e30d846b3dc75b4a0f2cf" src="//www.wolframalpha.com/widget/widget.jsp?id=2f1e0f79bf8e30d846b3dc75b4a0f2cf"></script>
						</div>
					</div>
				</section>
<?php endforeach;?>

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
<script>
function myFunction() {
    window.open("<?php echo base_url('Site/calculator');?>", "_blank",
		"toolbar=no,scrollbars=no,resizable=no,top=50,left=400,width=490,height=600");
}
</script>
	</body>
</html>
