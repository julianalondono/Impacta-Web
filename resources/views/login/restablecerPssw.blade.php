<html lang="en">
		<head>
		    <title>Restablecer contraseña</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
#Contenedor{
	width: 400px;
	margin: 50px auto;
	background-color: #F3EDED;
        border: 1px solid #ECE8E8;
	height: 410px;
	border-radius:8px;
	padding: 0px 9px 0px 9px;
}
.Icon span{
      background: #A8A6A6;
      padding: 20px;
      border-radius: 120px;
}
.Icon{
     margin-top: 10px;
     margin-bottom:10px; 
     color: #FFF;
     font-size: 50px;
     text-align: center;
}
.opcioncontra{
	text-align: center;
	margin-top: 20px;
	font-size: 14px;
}
.btn{
    background: #009900;
}
h2{ color:#009933 }
</style>
		</head>
		<body>
		 <div id="Contenedor">

<div class="ContentForm">

		 	<form action="" method="post" name="FormEntrar">
             <h2>Restablecer contraseña</h2>
		 		<div class="input-group input-group-lg">
                 <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
				  <input type="nPssw" class="form-control" name="nPssw" placeholder="Nueva contraseña" id="Nit" aria-describedby="sizing-addon1" required>
            	</div>
                <p>La contraseña debe tener 8 caracteres. Combina mayúsculas, minúsculas, números y caracteres especiales.</p>

				<br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
				  <input type="cnPssw" name="cnPssw" class="form-control" placeholder="Confirmar contraseña" aria-describedby="sizing-addon1" required>
				</div>
                <br>
                <input type="validaImg" name="validaImg" class="form-control" placeholder="Caracteres de la imagen" aria-describedby="sizing-addon1" required>
                <br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" >Volver</button>
                <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" >Continuar</button>
            </form>
		 </div>	
		 </div>
</body>
</html>