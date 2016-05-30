
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

		<link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/skel.css" />
		<link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style-xlarge.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style-pinterest.css" rel="stylesheet">


	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Pinoypapayat</a></strong> by FitnessFirst</h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo base_url('Site'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('Site/about');?>">About Us</a></li>
						<li><a href="<?php echo base_url('Site/contact');?>">Contact Us</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
			<div class="container">
			<div class="row">
    

    
    <section id="pinBoot">
    	<?php if(isset($content)){
              foreach($content as $cont): ?>
      <article class="white-panel"><img src="<?php echo base_url();?>images/pic06.jpg" alt="">
        <h4><?php echo $cont->title;?></h4>
        <h5 style="color: gray;"><?php echo $cont->description; ?></h5> 
        <p style="color: gray; font-family: times new roman; font-variant-caps: initial;"><?php echo $cont->content; ?></p>
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
