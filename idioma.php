<!--Created by Marco Barrios on 12/02/2015.-->
<!DOCTYPE html>
<html>
<head lang="es-ES">
    <meta charset="UTF-8">
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <title>::ACASI::</title>
    <link rel = "stylesheet" href = "styles/normalize.css"/>
    <link rel="stylesheet" href="styles/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'/>
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
	<header>
        <figure id = "logo">
            <img src="images/logo.png" width="20px" />
        </figure>
        <h2>ACASI</h2>
    </header>
<?php $usuario = $_POST['user']; 
$securepassword = sha1(md5($_POST['password']));

$mysqli = new mysqli("localhost", "root", "", "acasi2");
if ($mysqli === false) {
    die ("ERROR: No se estableció la conexión. " . mysqli_connect_error());
} else {
    $sql = "SELECT usuario FROM usuarios where usuario = '$usuario' AND password='$securepassword'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_object();
    $accesso = $row->usuario;
} 
$mysqli->close(); ?>

<?php if ($accesso != null) { ?>
    <form name="form" method="post" action="encuesta.php">
    <input hidden name="user" value="1">
		<div class="idiomas">
		<h2>Seleccione el idioma para el audio en la encuesta:</h2>
			<div class="botones-idioma">
				<div>
					<a href="encuesta.php?idiomas=ninguno" class="btn btn-success">Ningún Idioma</a>
					<a href="encuesta.php?idiomas=espaniol" class="btn btn-success">Español</a>
					<a href="encuesta.php?idiomas=aguacateco" class="btn btn-success">Aguacateco</a>
					<a href="encuesta.php?idiomas=ixil" class="btn btn-success">Ixil</a>
					<a href="encuesta.php?idiomas=mam" class="btn btn-success">Mam</a>
				</div>
			</div>
		</div>
    </form>

<?php } else { header('Location: index.php'); } ?>

	<footer class ="">
		<div>
          <img src="images/logoIDEI.png" class = "img-footer" />
          <img src="images/logoPARLAMENTO.png" class = "img-footer" />
          <img src="images/logoHIVOS.png" class = "img-footer" />
         </div>
    </footer>
 	<script type="text/javascript" src="controllers/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="controllers/poll.js"></script>
</body>
</html>