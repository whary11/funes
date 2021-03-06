<?php 
    ob_start();//para solucionar el problema con el redireccionamieto
    session_start();
        if (!isset($_SESSION["usuario"])){
            header("Location:index.php");
        }else{


    require_once("controladores/conexion/conn.php");
    $db = new conexion();
    $q = "SELECT * FROM `usuarios_funes` WHERE id='$_SESSION[usuario]' ";
    $data = $db->leeTabla($q);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Funes - Sistema de Administración</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="vendor/app/css/animate.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- <link href="../vendor/app/css/alertify.rtl.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="vendor/app/css/toastr.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/dropzone.css"> -->
    <link rel="stylesheet" type="text/css" href="css/alertify.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <div id="">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top fixed" id="nav" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index2.php?modulo=perfil&elemento=index.php" id="nuevoproducto" style="display:inline-block;font-size: 15px;">
                    <?php print($data[0]->nombre); ?> <?php print($data[0]->apellidos); ?> 
                </a>

            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index2.php?modulo=perfil&elemento=index.php"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index2.php?modulo=inicio&elemento=cerrar_sesion.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
<!-- //Buscardor -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input id="buscador" type="text" class="form-control" placeholder="Busca un cliente..">
                                <span class="input-group-btn">
                                </span>
                            </div>
                            <!-- Terminar buscador -->
                            <div class="row muestraresult">
                                

                                
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <!-- <a href="#!"><i class="fa fa-dashboard fa-fw"></i> Escritorio</a> -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-thumbs-up fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index2.php?modulo=cliente&elemento=index.php" id="nuevocliente"><i class="glyphicon glyphicon-user"></i> Nuevo Cliente<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="index2.php?modulo=cliente&elemento=verClientes.php" id="verClientes"> <i class="glyphicon glyphicon-shopping-cart"></i> Ver Clientes<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cubes fa-fw"></i> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index2.php?modulo=producto&elemento=index.php" id="nuevoproducto"><i class="glyphicon glyphicon-user"></i> Nuevo Producto<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="index2.php?modulo=producto&elemento=verProductos.php" id="verProductos"> <i class="glyphicon glyphicon-shopping-cart"></i> Ver Productos<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Presupuesto<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index2.php?modulo=presupuesto&elemento=index.php" id="nuevoPresupuesto"><i class="fa fa-file-pdf-o fa-fw"></i> Nuevo<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="index2.php?modulo=presupuesto&elemento=ver_presupuestos.php" id="verPresupuesto"> <i class="fa fa-file-powerpoint-o fa-fw"></i> Ver presupuestos<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                        <!-- <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Seguimiento</a>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-bug fa-fw"></i> Seguimiento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Presupuesto Generado</a>
                                </li>
                                <li>
                                    <a href="#">Remitos Disponibles</a>
                                </li>
                                <li>
                                    <a href="#">Productos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div class="espacio"></div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- <h1 class="page-header">Escritorio</h1> -->
                </div>
            </div>
            <!-- /.Contenido -->
                <section class="row">
                <div class="col-lg-12" id="resultado"><br>
                    <?php
                        $mod = @$_GET['modulo'];
                        $m=@$_GET['elemento'];
                        $archivo = 'modulos/'.$mod.'/'.$m;
                        if (file_exists($archivo) and !empty($_GET['modulo']) and !empty($_GET['elemento'])) {
                            include_once($archivo);
                        }else{
                            //include_once("modulos/orden/index.php");
                        }
                    ?>
                    
                </div>
            </section>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/raphael.min.js"></script>
    <!-- <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script> -->
    <!-- Data tables -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/dataTables.responsive.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <!-- App -->
    <script src="js/app.js"></script>
    <!-- <script src="js/accion_presupuesto.js"></script> -->
    <script src="js/toastr.min.js"></script>  
    <script src="js/alertify.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script><!-- 
    <script type="text/javascript" src="js/moment-with-locales.js"></script> -->
    <script type="text/javascript">
        $('#cliente-table').DataTable({
            responsive: true,
        });
        $('#productos-table').DataTable({
            responsive: true,
        }); 
         $('#presupuestos-table').DataTable({
            responsive: true,
        });    
    </script> 
</body>

</html>
<?php
    }
    ob_end_flush();//para solucionar el problema con el redireccionamieto
 ?>