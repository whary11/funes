<?php 
    session_start();
    if (isset($_SESSION["usuario"])){
        header("Location:index2.php");
    }else{
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .ajs-message.ajs-custom { color: #31708f;  background-color: #d9edf7;  border-color: #31708f; }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de sesión - Funes</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/alertify.css">
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
                                <input type="submit" name="" class="btn btn-lg btn-success btn-block" value="Ir allá">
                                <input type="hidden" name="bandera">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/accion_inicio.js"></script>

</body>

</html>
<?php 

}

 ?>
