<?php
include 'includes/header.php';
?>
<h1>Nueva Conversación</h1>

<?php

include('conectar.php'); //Incluimos el archivo conectar.php

if (isset($_POST['enviar'])) { //Esta es una forma de ocultar el formulario una vez enviado
	$autor=$_POST['autor'];
	$titulo=$_POST['titulo'];
	$mensaje=$_POST['mensaje'];
	$sqlcon="INSERT INTO conversaciones (autor,titulo,mensaje) VALUES ('$autor','$titulo','$mensaje')";
	if (mysqli_query($conexion,$sqlcon) ){
		echo '<div class="well">Mensaje grabado perfectamente</div>';
		echo'<a class="btn btn-primary" href="index.php">Volver al Inicio</a>';
	}
	else {
    echo "Error: " . $sqlmen . "<br>" . mysqli_error($conn);
	}
} else { //Si no se a pulsado el boton ENVIAR, mostramos el formulario
?>
<form class='form' action='conversaciones.php' method='POST'>
<div class="form-group">
<label>Autor: </label><input class='form-control' type='text' name='autor'>
</div>

<div class="form-group">
<label>Tema Propuesto: </label><input class='form-control' type='text' name='titulo'></div>

<div class="form-group">
<label>Propuesta:</label> <textarea class='form-control'name='mensaje'></textarea>
</div>

<input class='btn btn-primary' type='submit' name='enviar' value='Enviar mensaje'>
</form>

<?php
}
include 'includes/footer.php';
?>
