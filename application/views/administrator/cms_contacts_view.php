
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
                <li>
                        <a href=""><i class="fa fa-fw fa-bar-chart"></i> Reports</a>
                    </li>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="container"><div class="wrapper">
                    <div id="about"  class="about">
                      <div class="row">
                          <div class="text-center wowload " style=" padding-left: 10.0em; padding-right: 10.0em">
                              <div>
                                  <div class="panel-heading"><br>
                                    <h2 align="center" class="glyphicon glyphicon-shopping-cart"> About page Content</h2></div>
                                      <div class="panel-body">
                                        <?php foreach($content as $cont): ?>
                                          <form name="about" method="post" action="<?php echo base_url().'admin/update_contacts/' ?>" >

                                            <br/><h3 align="center" class="panel panel-success">TITLE</h3>
                                                                <textarea name="title" rows="10" cols="80">
                                                                  <?php echo $cont->title;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">DESCRIPTION</h3>
                                                                <textarea name="description" rows="10" cols="80">
                                                                  <?php echo $cont->description;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">TELEPHONE TITLE</h3>
                                                                <textarea name="tel_title"  rows="10" cols="80">
                                                                  <?php echo $cont->tel_title;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">TELEPHONE NUMBER</h3>
                                                                <textarea name="telephone" rows="10" cols="80">
                                                                  <?php echo $cont->telephone;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">CELLPHONE TITLE</h3>
                                                                <textarea name="cel_title" rows="10" cols="80">
                                                                  <?php echo $cont->cel_title;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">CELLPHONE NUMBER</h3>
                                                                <textarea name="cellphone" rows="10" cols="80">
                                                                  <?php echo $cont->cellphone;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">EMAIL TITLE</h3>
                                                                <textarea name="email_title" rows="10" cols="80">
                                                                  <?php echo $cont->email_title;?>
                                                                </textarea><br/>
                                            <br/><h3 align="center" class="panel panel-success">EMAIL ADDRESS</h3>
                                                                <textarea name="email"rows="10" cols="80">
                                                                  <?php echo $cont->email;?>
                                                                </textarea><br/>
                                                           <div class="form-group"><button class="btn btn-danger" type="submit"> OK</button></div>
                                                            </form>

                                                                <?php endforeach;?>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- works -->


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
