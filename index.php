
<?php
include 'includes/header.php';
?>
<h1>Pequeña aplicación de Foro</h1>
<h2>Conversaciones:<span class='pull-right'><a class='btn btn-success' href="conversaciones.php">Crear conversación</a></span></h2>

<?php

include('conectar.php'); //Incluimos el archivo conectar.php

$sql="SELECT * FROM conversaciones ORDER BY id ASC";
$resultado = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($resultado)>0) { 
		echo '<ol>';
		while ($fila = mysqli_fetch_array($resultado)) { 
		echo "<li><a href='mensajes.php?id=$fila[id]'>$fila[titulo]</a></li>"; //Mostramos el título con un enlace al mensaje y sus respuestas
		}
		echo'</ol>';
	} else { 
	echo "<div class='well'>Aún no tenemos conversaciones, crea una...</div>";
	}
include 'includes/footer.php';

?>
