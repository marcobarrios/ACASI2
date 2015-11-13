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
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="styles/styles-portada.css">
</head>
<body id="login">
    <p align="center" class="h_text">
        <h2>ACASI</h2>
    </p>
    <div id="loginBody">
        <form class="form-horizontal" role="form" method="post" action="idioma.php">
        <script language="javascript">
var ip = java.net.InetAddress.getLocalHost().getHostAddress();
document.writeln('Tu IP es: "' + ip + '"') 
</script>
        <div class="form-group">
            <label class="col-md-4 control-label">Usuario</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="user" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Contraseña</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div> 

        <hr />  
        
        <div class = "btn-div">
            <input type="submit" class="btn btn-success"/>
        </div>
    </form>
</div>
    <div id="loginBarra">
    </div>
    <div id="loginFooter">
        <figure class="logos">
            <img src="images/logoIDEI.png" alt="IDEI">
            <img src="images/logoPARLAMENTO.png" alt="PARLAMENTO">
            <img src="images/logoHIVOS.png" alt="hivos">
        </figure>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>