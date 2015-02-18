<?php
include 'includes/header.php';
?>
<h1>Nueva Respuesta</h1>
<?php
//var_dump($_REQUEST);

include('conectar.php'); //Incluimos el archivo conectar.php

if(isset($_GET['id']))$idcon = $_GET['id']; //Definimos $_GET['id'] como $idcon

if (isset($_POST['enviar'])) { 
	$autor=$_POST['autor'];
	$titulo=$_POST['titulo'];
	$mensaje=$_POST['mensaje'];
$sqlres="INSERT INTO respuestas (autor , titulo , mensaje ,respuestas) VALUES ('$autor','$titulo','$mensaje','$_POST[get]')";

if (mysqli_query($conexion,$sqlres)) { //Si se agregó el mensaje correctamente le mostramos un mensaje

echo "Su respuesta  ha sido añadida";

} else { //Si no le mostramos el mensaje de error

echo "Hubo un error al agregar el mensaje";

}

} else { //Si no se a pulsado el boton ENVIAR, mostramos el formulario

?>
<form class='form' action='respuesta.php' method='POST'>
<div class="form-group">
<label>Autor: </label><input class='form-control' type='text' name='autor'>
</div>

<div class="form-group">
<label>Asunto Respuesta: </label><input class='form-control' type='text' name='titulo'></div>

<div class="form-group">
<label>Respuesta:</label> <textarea class='form-control'name='mensaje'></textarea>
</div>

<input class='btn btn-primary' type='submit' name='enviar' value='Responder'>
<input type='hidden' value='<?=$idcon// lo utilizamos para mandar el id por get ?>' name='get'>
</form>
<?php
}

?>
