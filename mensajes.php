<?php
include 'includes/header.php';
?>
<h1>Hilos de la Conversacion</h1>
<?php

include('conectar.php');
//Primero buscamos el mensaje del que dependen los hilos...
$idcon = $_GET['id']; //Definimos $_GET['id'] como $idme id del mensajeee
$sqlconver="SELECT * FROM conversaciones WHERE id = '$idcon'";

$conversacion = mysqli_query($conexion,$sqlconver); 
//Consulta a la base de datos para mostrar los mensajes ordenados por ID y en orden desendente donde la ID es igual a la enviada por $_GET

$fila = mysqli_fetch_array($conversacion); //Extraemos los resultados para mostrarlos



echo "<div class=''>Tema Propuesto: $fila[titulo]</div>";
echo "<div class=''>Propuesta: $fila[mensaje]</div>";
echo "<div class=''>Iniciado por: $fila[autor]</div>";
echo "<div class=''><a  class='btn btn-success'href='respuesta.php?id=$idcon'>AÑADIR RESPUESTA</a></div>";
// Recogemos todas las respuestas que ya existen referentes al hilo
$sqlrespuestas="SELECT * FROM respuestas WHERE respuestas = '$idcon' ORDER BY id DESC";
$respuestas = mysqli_query($conexion,$sqlrespuestas);

if (mysqli_num_rows($respuestas)>0){
	echo "<h2>Respuestas</h2>";
	while($filar = mysqli_fetch_array($respuestas)){
		
		echo "<p>Título:$filar[titulo]</p>";
		echo "<p>Título:$filar[mensaje]</p>";
		echo "<p>Título:$filar[autor]</p>";
		echo "<hr>";
		}

	}	 
else { 
	echo "<div class='well'>Aún no tenemos respuestas en esta conversación, contesta si quieres.</div>";
	}


 
include 'includes/footer.php';
?>
