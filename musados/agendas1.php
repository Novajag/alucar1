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


$usuario=$_SESSION['username'];
$idusuario=$_SESSION['id'];

if (isset($_POST['agendas']) && isset($_POST['idcarro'])) {
	$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion');
 	$dia=$_POST['agendas'];
	$idcarro=$_POST['idcarro'];

	$sql1 = "INSERT INTO agendas (idusuario,nomeusuario,	idcarro,	dia)
                                       VALUES ('$idusuario', '$usuario','$idcarro','$dia')";
 
	$result1 = $con->query($sql1);
 } 





// Consulta SQL para obtener los datos de los ítems



?>

<?php
$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 

// Consulta SQL para obtener los datos de los ítems
$sql1 = "SELECT idcarro FROM agendas";
$result1 = $con->query($sql1);



if ($result1 === false) {
    die("Error en la consulta SQL a la tabla 'agendas': " . $con->error);
}

// Almacenar los resultados en un array
$array_resultados = array();
while ($row = $result1->fetch_assoc()) {
    $array_resultados[] = $row['idcarro'];
}

$res = 0;

// Verificar si el array está vacío
if (empty($array_resultados)) {
    $res = 1;
}

// Realizar la segunda consulta usando los valores del array
if ($res == 0) {
    foreach ($array_resultados as $idcarro) {
        // Escapar las variables para evitar inyección SQL
        $idcarro = $con->real_escape_string($idcarro);

        $sql2 = "SELECT * FROM carros WHERE carroid = '$idcarro'";
        $result2 = $con->query($sql2);

        if ($result2 === false) {
            die("Error en la consulta SQL a la tabla 'carros': " . $con->error);
        }

    }
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

        				if ($result2->num_rows > 0) {
            				// Iterar sobre cada fila de resultados
            					while($producto = $result2->fetch_assoc()) {
                					// Incluir el archivo mostrar.php y pasar los datos del producto
                					include 'mostrar1.php';
                					$res = 0;
                				}	
            			}
        				 else {
            				// Si no hay resultados, mostrar un mensaje
            				echo "0 resultados";
        				}
        				// Cerrar la conexión a la base de datos
        				
        			?>
				</div>
	<?php include ('info.php'); ?>
</body>
</html>