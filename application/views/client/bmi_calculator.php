
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
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/skel.min.js"></script>
        <script src="<?php echo base_url(); ?>js/skel-layers.min.js"></script>
        <script src="<?php echo base_url(); ?>js/init.js"></script>

        <link type="text/css" rel="stylesheet"  href="<?php echo base_url(); ?>css/style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style-xlarge.css"/>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <h1><strong><a href="<?php echo base_url(); ?>Site">Pinoypapayat</a></strong> by FitnessFirst</h1>
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
                <div class="">
                    <center><h2 style="color: gray;"><span class="glyphicon glyphicon-scale" aria-hidden="true"></span>Calculate your BMI</h2></center><br>




                    <div class="panel panel-default">
                        <div class="panel-body">
                            <br/><br/>

                            <?php
                            if (isset($error)) {
                                echo "<div class='alert alert-danger' align='center' role='alert'>" . $error . "</div>";
                            }
                            ?>
                            <div class="col-sm-6 ">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <section id="one" class="wrapper style2">

                                            <h2 style="padding-left: 20px;" >Imperial (US) Method</h2>
                                            <br/><br>

                                            <form style="padding-left: 20px;" type="post" action="<?php echo base_url(); ?>site/imperial_result">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label for="pounds">Weight:</label>
                                                    </div>

                                                    <div class="col-xs-4">
                                                        <input type="number" name="pounds" min="0"  class="form-control" placeholder="Pounds/lbs'" step="any">
                                                    </div><br><br><br>
                                                    <div class="col-xs-2">
                                                        <label for="inch">Height:</label>
                                                    </div>

                                                    <div class="col-xs-4">
                                                        <input type="number" name="foot"  min="0"  class="form-control" placeholder="foot/feet/ft'" step="any">
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="number" name="inch"  min="0"  class="form-control" placeholder="Inch/Inches/" step="any">
                                                    </div>
                                                </div>
                                                <br>
                                                <center><button class="btn btn-primary" type="submit" id="button">Calculate</button></center>
                                            </form>

                                        </section>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <section id="one" class="wrapper style2">

                                            <h2 style="padding-left: 20px;">Metric Method</h2>
                                            <br/><br>
                                            <form style="padding-left: 20px;" type="post" action="<?php echo base_url(); ?>site/metric_result">

                                                <div class="col-xs-4">
                                                    <label for="pounds">Weight in Kg:</label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <input type="number" name="kilogram"  min="0"  class="form-control" placeholder="Kg" step="any">
                                                </div><br><br><br>
                                                <div class="col-xs-4">
                                                    <label for="inch">Height in Meters:  </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <input type="number" name="meters"  min="0"  class="form-control" placeholder="m" step="any">
                                                </div>
                                                <br/><br/>
                                                <br>
                                                <center><button class="btn btn-primary" type="submit" id="button">Calculate</button></center>
                                            </form>
                                        </section>


                                    </div>
                                </div>
                            </div>




                        </div>
                        <br/><br/>
                    </div>
                </div>

            </div>



            <div style="padding-left: 100px; padding-right:100px;">
                <h2 style="padding-left: 20px;">Body Mass Index</h2>
                <br>
                BMI (Body Mass Index) is a measurement of body fat based on height and weight that applies to both men and women between the ages of 18 and 65 years.
                BMI can be used to indicate if you are overweight, obese, underweight or normal. A healthy BMI score is between 20 and 25. A score below 20 indicates that you may be underweight; a value above 25 indicates that you may be overweight.
                You can calculate your BMI by using our BMI Calculator below, or by using the BMI Formula.
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
