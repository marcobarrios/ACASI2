<?php
/**
 * Created by PhpStorm.
 * User: Marco Barrios
 * Date: 23/02/2015
 * Time: 9:55 PM
 */
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>ACASI</title>
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <link rel="stylesheet" href="styles/styles-portada.css">
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
</head>
<body id="login">

    <p align="center">
        <span class="glyphicon glyphicon-user"></span>
    </p>
    <div id="loginBody">
        <form class="form-horizontal" role="form" method="POST" action="">
        

        <div class="form-group">
            <label class="col-md-4 control-label">Correo electrónico</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Contraseña</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>

        <div class="form-group" style="text-align: left;">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Recordar cuenta
                    </label>
                </div>
            </div>
        </div>
    
        <hr />

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <a href="idioma.php" type="submit" class="btn btn-primary btn-block">Ingresar</a>
            </div>
        </div>
    </form>
</div>
    <div id="loginBarra">
    </div>
    <div id="loginFooter">
        
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>