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
    <link href="/sets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="/home">RLF</a>
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
                            <a href="/login"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                    </li> <li>
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12">

                <div class="row">
                 <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-left: -1174px;" class="close" > <i class="fa fa-plus"></i>Add </button>
                     <div class="col-md-3" style="margin-left: 895px;"">
                        <form action="#" method="get">
                            <div class="input-group">
                            <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background: white;height: 500px;margin-top: 109px;">
                  <form role="form" action="" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                             <div class="col-md-12">
                                    <label style="margin-left: 47%;margin-top: 28px;">Registration Message youth</label>
                                    <hr>
                                </div><br><br>  

                            <div class="col-md-12">
                                <label>Registration Message youth</label>
                                <input class="form-control" placeholder="Enter text" name="nbyouth">
                            </div>
                             <div class="col-md-12" style="margin-left:35%;"><br>
                                   <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                                   <button type="reset" name="cancel" value="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                               </div>
                    </form>
                   
                </div>
                </div>
                </div>
                   <div class="row">
                    <div class="col-lg-12">
                        <h2>Registration Message youth</h2>
                        <div class="table-responsive" align="center">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Registration </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0;?>
                                            @foreach($nbtwo AS $value)
                                                <tr >
                                                    <td>{{++$i}}</td>
                                                    <td>{{$value->nbyouth}}</td>
                                                    <td>
                                                        <button data-toggle="modal" data-target="#editnbtwo<?php echo $i;?>" class="pull-left edit btn btn-sm btn-default dlt_sm_table"><i class="glyphicon glyphicon-pencil"></i>
                                                        </button><br><br>
                                            <form  class="pull-left" action="/nbtwo/{{$value->id}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <button onclick="return confirm('Are you sure you want to delete this?');" type="submit" class="delete btn btn-sm btn-danger dlt_sm_table" data-toggle="modal" data-target="#modal-basic>"><i class="glyphicon glyphicon-trash"></i></button>
                                            </form>
                            <div id="editnbtwo<?php echo $i;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog col-md-6 col-md-offset-3" style="margin-left: 33%;">
                                    <div class="modal-content" style= "height: 500px;">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="custom-width-modalLabel">Edit Registration message</h4></div>
                                        <div class="modal-body">
                                            
                           <form action="/nbtwo/{{$value->id}}" method="Post">
                           <div class="row">
                                  <input type="hidden" name="_method" value="PUT" />
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            
                                
            

                            <div class="col-md-12" >
                                <label>Registration Message</label>
                                
                                 <textarea rows="4" class="form-control">
                                    {{$value->nbyouth}}
                                </textarea>
                            </div>
                            
                               <div class="col-md-12" style="margin-left:35%;"><br>
                                   <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                                   <button type="reset" name="cancel" value="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                               </div>
                        </form>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            </div>
                                                    </td>
                                                    </tr>
                                            @endforeach
                                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 

                </div>
                <!-- /.row -->
                </div>
  

               
                        

    <!-- jQuery -->
    <script src="/sets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sets/js/bootstrap.min.js"></script>

</body>

</html>
