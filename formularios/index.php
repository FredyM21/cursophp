<?php 
if ($_POST) {
	echo $_POST['nombre'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario 01</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"><!-- le programamos a que archivo le vamos a enviar-->
		<input type="text" placeholder="Nombre:" name="nombre">
		<br><!--'placeholder' Proporciona una sugerencia  o ejemplo de lo que se espera que el usuario ingrese en este espacio-->
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value ="hombre" id="hombre">
		
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value ="mujer" id="mujer">
		<br>
		<select name="year" id="year">			
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>	
		</select>
		<br>

		<label for="terminos">Aceptar los términos?</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<br>
		<input type="submit" value ="Enviar">	
	</form>
</body>
</html>


