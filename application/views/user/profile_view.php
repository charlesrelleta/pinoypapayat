
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pinoypapayat | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>sb/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>sb/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>sb/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Pinoypapat</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="<?php echo base_url()."admin/logout"?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li  >
                        <a href="<?php echo base_url();?>user/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li >
                    <li class="active">
                        <a href="<?php echo base_url();?>user/dashboard"><i class="fa fa-fw fa-user"></i> Profile </a>
                    </li>                    
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
            <br>
                <div class="panel panel-default">
                    <div class="panel-body">
                         <div style="padding-left: 3.0em; padding-right: 3.0em;">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-16" >
                            <h4 class="page-header">
                                Profile
                            </h4>
                            <br>
                                <div style="padding-left: 7.0em; ">
                                <table  class="table-condensed"  width="40%" border="0" >
                                            <tr>
                                                <td>Profession</td>
                                                <td>General Physician</td>
                                            </tr>
                                            <tr>
                                                <td>License Number</td>
                                                <td>123456676</td>
                                            </tr>
                                </table>
                                </div>
                                <br>
                                <div style="padding-left: 7.0em; ">
                                <table  class="table-condensed"  width="40%" border="0" >
                                            <tr>
                                                <td>First Name</td>
                                                <td>Juan</td>
                                            </tr>
                                            <tr>
                                                <td>Last Name</td>
                                                <td>Cruz</td>
                                            </tr>
                                            <tr>
                                                <td>Middle Name</td>
                                                <td>Dela</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>Undefined</td>
                                            </tr>
                                            <tr>
                                                <td>Birthday</td>
                                                <td>March 2, 1978</td>
                                            </tr>

                                        </table>
                                    </div>
                                    <br>
                                    <div style="padding-left: 7.0em; ">
                                        <table  class="table-condensed"  width="40%" border="0" >


                                            <tr>
                                                <td>Email Address</td>
                                                <td>juandelaccruz@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>Contact Number</td>
                                                <td>123456676</td>
                                            </tr>


                                        </table>
                                    </div>

                                    <h4 class="page-header">
                                        Account
                                    </h4>
                                    <div style="padding-left: 7.0em; ">
                                        <table  class="table-condensed"  width="40%" border="0" >
                                            <tr>
                                                <td>Username</td>
                                                <td>juandelacruz</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                               <td>*********** &nbsp; <a href="" >[ Change ]</a></td>
                                            </tr>

                                </table>

                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>

            </div>
        <!-- /#page-wrapper -->
        <footer>

        <div class="row">
                    <div class="col-lg-19" >
                        <hr>
                        <p><center>Copyright &copy; Pinoypapayat 20156</center></p>
                    </div>
                </div>
    </footer>
        </div>
    <!-- /#wrapper -->




    <!-- jQuery -->
    <script src="<?php echo base_url();?>sb/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>sb/js/bootstrap.min.js"></script>



</body>

</html>
