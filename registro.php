
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Barber_shop</title>

	<link rel="icon" type="icon" href="img/logo.png">

<link rel="stylesheet" type="text/css" href="css/background-style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>


<body>


	<div class="container-start">
	

		<div class="container-following">
	

			<div class="container-form">
	

<form action="validar/registro.php" method="post">

	<div class="row">

		<div class="col-10">

			<img src="img/logo.png" width="30%">

			<div class="form-group">
    		<label type="text"></label>
    		<div class="input"><input type="text" name="usuario" class="form-control" placeholder="Digite Su Usuario Nuevo" required=""></div>
  			</div>

  			<div class="form-group">
    		<div class="input"><input type="password" name="pass" class="form-control" placeholder="Digite Su Contraseña Nueva" required=""></div>
  			</div>


  			<div class="button"><button type="submit" class="btn btn-danger">REGISTRARME</button></div><br>
  			<p>¿Ya tienes una cuenta? <a href="index.php"><font color="white">Logeate</font></a></p>


		</div>

	</div>

</form>

			</div>

		</div>

	</div>



</body>
</html>