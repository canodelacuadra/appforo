<?php

include('conectar.php'); //Incluimos el archivo conectar.php

$get = $_GET['id']; //Definimos $_GET['id'] como $get

$seleccionar = mysql_query("SELECT * FROM mensajes WHERE id = '$get'"); //Acemos la consulta a la base de datos para mostrar los mensajes ordenados por ID y en orden desendente donde la ID es igual a la enviada por $_GET

$row = mysql_fetch_array($seleccionar); //Extraemos los resultados para mostrarlos

echo "<a href='respuesta.php?id=$get'><b>RESPONDER</b></a>
<br><br>";

echo "<b>T&iacute;tulo:</b> <i>$row[titulo]</i>
<br>
<b>Mensaje:</b>
<br>
$row[mensaje]
<br>
<b>Enviado por:</b> <i>$row[autor]</i>"; //Mostramos los datos ordenados

$seleccionar1 = mysql_query("SELECT * FROM respuestas WHERE respuestas = '$get' ORDER BY id DESC");

if (mysql_num_rows($seleccionar1) or die (mysql_error())) { //Si hay respuestas mostramos los datos ordenados

$row1 = mysql_fetch_array($seleccionar1);

echo "<hr>";

echo "<b>T&iacute;tulo:</b> <i>$row1[titulo]</i>
<br>
<b>Mensaje:</b>
<br>
$row1[mensaje]
<br>
<b>Enviado por:</b> <i>$row1[autor]</i>"; //Mostramos los datos ordenados

echo "<br><br>
<a href='respuesta.php?id=$get'><b>RESPONDER</b></a>";

} //Si no hay respuestas, no se mostrará nada 

?>
