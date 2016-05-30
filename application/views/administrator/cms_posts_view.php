
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

        <!-- Custom EDITOR -->


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

                    <li >
                        <a href="<?php echo base_url()."Admin/accounts_management"?>"><i class="fa fa-fw fa-desktop"></i> Accounts </a>
                    </li>
                    <li class="active">
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
                        <a href=""><i class="fa fa-fw fa-bar-chart"></i> Reports</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                            <a class="btn btn-success pull-right" href="<?php echo base_url()."admin/goto_addPost/";?>" role="button">ADD POST</a>
                        </h1>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php base_url()."Admin"?>">CMS</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Posts
                            </li>  </li>
                            <li class="pull-right">

                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->
                <div class="container"><div class="wrapper">

                      <div class="row">
                          <div class="text-center wowload " style="padding-right: 4.0em">
                              <div>
                                  <div class="panel-heading"><br>
                                    <h2 align="center" class="glyphicon glyphicon-shopping-cart"> POST DETAILS</h2></div>
                                      <div class="panel-body">

                                          <table class="table table-condensed .table-responsive">
                                            <tr>
                                              <td>TITLE</td>
                                              <td>DESCRIPTION</td>
                                              <td>CONTENT</td>
                                              <td>DATE POSTED</td>
                                              <td>DATE UPDATED</td>
                                              <td>ACTION</td>
                                            </tr>
                                            <?php
                                            if($content!=false){
                                               foreach($content as $cont): ?>
                                              <tr>
                                                <td><?php echo $cont->title; ?></td>
                                                <td><?php echo $cont->description; ?></td>
                                                <td><?php echo $cont->content; ?></td>
                                                <td><?php echo $cont->date_posted; ?></td>
                                                <td><?php echo $cont->date_updated; ?></td>
                                                <td><a class="btn btn-warning" href="<?php echo base_url()."admin/goto_updatePost/".$cont->_id;?>" role="button">EDIT</a></td>
                                              </tr>
                                            <?php endforeach;}
                                            else { ?>
                                                <script> alert("No Records Yet!");</script>
                                            <?php }?>

                                          </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
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
