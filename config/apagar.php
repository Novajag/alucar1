
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
if (isset($_GET['idc'])) {
	$id = $_GET['idc'];
	$carroId = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
	$idusuario = $_SESSION['id'];
	$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 

	// Consulta SQL para obtener los datos de los ítems
	$sql = "DELETE FROM `agendas` WHERE `idcarro`='$carroId ' and `idusuario`='$idusuario'";


	$result = $con->query($sql);

	// Verificar si la consulta fue exitosa
	if ($result === false) {
 	   die("Error en la consulta SQL para eliminar el registro: " . $con->error);
	} else {
 	   header('Location: http://localhost/dashboard/site/musados/agendas1.php');
	}

	$con->close();

}else{
	echo "hola";
}

?>