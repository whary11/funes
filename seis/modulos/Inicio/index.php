<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de sesión - Funes</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <!-- <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inicio de sesión</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="inicio">
                            <fieldset>
                                <div class="form-group" id="controlusuario">
                                    <input class="form-control" required placeholder="Usuario" required name="usuario" type="text" id="usuario" autofocus>
                                </div>
                                <div class="form-group" id="controlclave">
                                    <input class="form-control" /*pattern="[A-Za-z0-9_-]{1-15}"*/ placeholder="Contraseña" name="clave" type="password" id="clave" value="">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="recordar" type="checkbox" value="Remember Me">Recuérdame
                                    </label>
                                </div> -->
                                <input type="submit" name="" class="btn btn-lg btn-success btn-block" value="Ir allá">
                                <input type="hidden" name="bandera">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--  -->
    <script type="text/javascript" src="../../js/accion_inicio.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="../dist/js/sb-admin-2.js"></script> -->

</body>

</html>
