<?php

include('conectar.php'); //Incluimos el archivo conectar.php

if(isset($_GET['id']))$get = $_GET['id']; //Definimos $_GET['id'] como $get

if (isset($_POST['enviar'])) { //Si se apretó el boton de enviar, grabamos los datos

$insert = "INSERT INTO respuestas (autor,titulo,mensaje,respuestas) VALUES ('".mysql_real_escape_string($_POST['autor'])."', '".mysql_real_escape_string($_POST['titulo'])."',' ".mysql_real_escape_string($_POST['mensaje'])."', '$_POST[get]')"; //Consulta para agregar el mensaje

if (mysql_query($insert)) { //Si se agregó el mensaje correctamente le mostramos un mensaje

echo "Su mensaje ha sido agregado correctamente";

} else { //Si no le mostramos el mensaje de error

echo "Hubo un error al agregar el mensaje";

}

} else { //Si no se a pulsado el boton ENVIAR, mostramos el formulario

echo "<form action='respuesta.php' method='POST'>
Autor: <input type='text' name='autor'>
<br>
T&iacute;tulo: <input type='text' name='titulo'>
<br>
Mensaje: <textarea name='mensaje'></textarea>
<br>
<input type='submit' name='enviar' value='Enviar mensaje'>
<input type='hidden' value='$get' name='get'>"; //Formulario, usamos un input hidden para mandar el valor de GET

}

?>
