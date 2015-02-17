<?php
/** SISTEMA DE FOROS SIMPLE José Antonio Cano **/
/** ESTE SISTEMA DE FOROS ES ÚNICAMENTE para principiantes **/

$db_host = ('localhost'); //Nombre del servidor MySQL, por defecto localhost
$db_user = ('root'); //Usuario de la base de datos
$db_pass = (''); //Contraseña de la base de datos
$db_name = ('appforo'); //Nombre de la base de datos

$conectar = mysql_connect($db_host, $db_user, $db_pass) or die (mysql_error()); //Conectamos a la base de datos

mysql_select_db($db_name, $conectar) or die (mysql_error()); //Seleccionamos la base de datos

?>
