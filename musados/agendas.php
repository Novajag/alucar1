<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['cliente'])){
        $cliente = $_SESSION['cliente'];
    }else{
 		header('Location: http://localhost/dashboard/site/index.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>	
<?php
$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 

$procurar=$_POST['procurar'];



// Consulta SQL para obtener los datos de los ítems
$sql ="SELECT * FROM `carros` WHERE `marca`='$procurar' or `nomeCarros`='$procurar'"; 
$result = $con->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta SQL: " . $con->error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://localhost/dashboard/site/img/loog1.png" type="image/x-icon">
	<title>alucar</title>
</head>
<body>
	<?php include ('nav.php'); ?>
				 	<div class="row row-cols-4 p-5">
        			<?php
        				// Verificar si hay resultados
        				if ($result->num_rows > 0) {
            				// Iterar sobre cada fila de resultados
            					while($producto = $result->fetch_assoc()) {
                					// Incluir el archivo mostrar.php y pasar los datos del producto
                					include 'mostrar.php';
            					}
        				} else {
            				// Si no hay resultados, mostrar un mensaje
            				echo "0 resultados";
        				}
        				// Cerrar la conexión a la base de datos
        				$con->close();
        			?>
				</div>
	<?php include ('info.php'); ?>
</body>
</html>