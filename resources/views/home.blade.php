<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rwanda Leaders Fellowship</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assetss/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assetss/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/assetss/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assetss/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
                <a class="navbar-brand" href="/home">RLF Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   {{ Auth::user()->name }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       <!--  <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li> -->
                      <!--   <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                     <li>
                        <a href="/welcomemessage"><i class="fa  fa-fw fa-book"></i>welcome message</a>
                    </li> 
                    <li>
                        <a href="/speakers"><i class="fa  fa-fw fa-user"></i>speakers</a>
                    </li>
                     <li>
                        <a href="/sponsors"><i class="fa fa-fw fa-user"></i>sponsors</a>
                    </li> 
                    <li>
                        <a href="/slide"><i class="fa fa-fw fa-user"></i>slide</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-book"></i> Agenda <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="/agenda">Day one</a>
                            </li>
                            <li>
                                <a href="/agendatwo">Day two</a>
                            </li>
                             <li>
                                <a href="/introduction">Introduction</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Attendes"><i class="fa fa-fw fa-user"></i> Attendes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Attendes" class="collapse">
                            <li>
                                <a href="/list">Convetion</a>
                            </li>
                            <li>
                                <a href="/listtwo">Serena</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#regt"><i class="fa fa-fw fa-book"></i> Registration Nb <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="regt" class="collapse">
                            <li>
                                <a href="/nb">National Player </a>
                            </li>
                            <li>
                                <a href="/nbtwo">Youth</a>
                            </li>
                        </ul>
                    </li>
                  <!--   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Agenda <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Day one</a>
                            </li>
                            <li>
                                <a href="#">Day two</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="height:500px;>

            <div class="container-fluid">
            

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            RLF <small><!-- Statistics Overview --></small>
                        </h1>
                        <ol class="breadcrumb">
                            <!-- <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li> -->
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Rwanda  </strong>Leaders<a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link"></a> Fellowship
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$agenda}}</div>
                                        <div>Agenda</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/agenda">
                                <div class="panel-footer">
                                    <span class="pull-left">View Agenda</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$speaker}}</div>
                                        <div>Speakers</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/speakers">
                                <div class="panel-footer">
                                    <span class="pull-left">View Speakers</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$sponsor}}</div>
                                        <div>Sponsors</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/sponsors">
                                <div class="panel-footer">
                                    <span class="pull-left">View Sponsors</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$slide}}</div>
                                        <div>View Slide</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/slide">
                                <div class="panel-footer">
                                    <span class="pull-left">View Slide</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/assetss/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assetss/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/assetss/js/plugins/morris/raphael.min.js"></script>
    <script src="/assetss/js/plugins/morris/morris.min.js"></script>
    <script src="/assetss/js/plugins/morris/morris-data.js"></script>

</body>

</html>
