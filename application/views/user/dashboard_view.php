
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li  class="active">
                        <a href="<?php echo base_url();?>user/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>user/profile"><i class="fa fa-fw fa-user"></i> Profile </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> CMS <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url()."Admin/cms_home"?>">Home Page</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url()."Admin/cms_about"?>" >About Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."Admin/cms_contacts"?>">Contacts Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."Admin/cms_posts"?>">Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <br><br><br>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> 
                            </li>
                        </ol>
                    </div>

                    
                    <div class="panel panel-default">
                    
                        <div class="panel-body">
                        <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="Title">
                        <br>
                        <input type="text" class="form-control" placeholder="Description">
                        <br>
                        <textarea placeholder="Post something..." class="form-control" rows="3"></textarea>
                        <br>
                        <input type="file">Upload Photo</input>
                        <br><br>
                        <button class="btn btn-primary">Post</button>
                        </div>
                    </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading"><center>Posts</center></div>
                    <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Sample Post Title</h3>
                                    <h6>Sample post Description</h6>
                                    <center><img src="<?php echo base_url();?>images/pic01.jpg" alt="Una"></center><br>
                                    <p>Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. 
                                    Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. 
                                    Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. 
                                    Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. 
                                    Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum. </p>
                                </div>
                            </div>
                     </div>
                    <div class="panel-footer"><center>- End -</center></div>        
                    </div>
                </div>
                <!-- /.row -->

                            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>sb/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>sb/js/bootstrap.min.js"></script>

</body>

</html>
