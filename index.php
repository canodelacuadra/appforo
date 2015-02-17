<?php
include('conectar.php'); //Incluimos el archivo conectar.php

echo "<b><a href='nuevo.php'>Dejar un Mensaje</a></b><br><hr>"; //Boton para dejar mensaje

$seleccionar = mysql_query("SELECT * FROM mensajes ORDER BY id ASC"); //Acemos la consulta a la base de datos para mostrar los mensajes ordenados por ID y en orden asendente
if (mysql_num_rows($seleccionar)) { //Si hay contenido en la DB continuamos con while

while ($row = mysql_fetch_array($seleccionar)) { //Hacemos un bucle para que nos muestre todos los mensajes

echo "<b><a href='mensajes.php?id=$row[id]'>$row[titulo]</a></b>"; //Mostramos el título con un enlace al mensaje y sus respuestas
echo "<br><hr>"; //Bajamos un renglon y creamos una linea 

}

} else { //Si no hay ningún mensaje en la DB mostramos lo siguiente

echo "Nuestro foro no posee mensaje alguno";

}

?>
