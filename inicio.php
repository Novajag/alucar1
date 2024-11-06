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

// Consulta SQL para obtener los datos de los ítems
$sql = "SELECT * FROM carros";
$result = $con->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta SQL: " . $con->error);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>alucar</title>
		<link rel="stylesheet" type="text/css" href="">
		<link rel="icon" href="http://localhost/dashboard/site/img/loog1.png" type="image/x-icon">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	    <style type="text/css">


	    	.div-img{
	    		object-fit: cover;
	    	}
	    	.a{
	    		bottom: 20em;
	    	}
	    	.mostrar{
	    		height: 320px;
	    		background-color: ;
	    	}
	    	.titulo {
	    		left: 200px;
	    		bottom: 2em;
  				font-family: "Lugrasimo", cursive;
  				font-size: 10em;
  				font-style: normal;
  				color:#fff ;
			}
			.contenedor-titulo{
				height: 300px;
				 margin-bottom:300px;
				display:flex;
				justify-content:center;
				align-items:center;
				background:url("https://img.freepik.com/fotos-gratis/os-farois-e-o-capo-de-um-carro-preto-de-luxo_146671-19730.jpg?w=900&t=st=1713563764~exp=1713564364~hmac=2312ab1b6790fffbe7bb1bfdae9058761c56395ac0024b0c55f3b58cc7878cb9");
				background-repeat:no-repeat;
				background-size:cover;
				background-position:center;
			}
			@media (max-width:788px) {
				.titulo{
					font-size: 7em;
				}
				
			}
	    	
	    </style>
	    
</head>
<body>
	<?php include ('musados/nav.php'); ?>
	<section class="row">
		<div class="position-relative z-1 w-100 contain tex-cente contenedor-titulo" >
			<h1 class=" titulo">Bem-vindo</h1>
		</div>
		<div class="position-relative z-2  ">
			<div class=" position-absolute   a  w-100 h-100 ">
				<div class="row row-cols-4 p-5">
        			<?php
        				// Verificar si hay resultados
        				if ($result->num_rows > 0) {
            				// Iterar sobre cada fila de resultados
            					while($producto = $result->fetch_assoc()) {
                					// Incluir el archivo mostrar.php y pasar los datos del producto
                					include 'musados/mostrar.php';
            					}
        				} else {
            				// Si no hay resultados, mostrar un mensaje
            				echo "0 resultados";
        				}
        				// Cerrar la conexión a la base de datos
        				$con->close();
        			?>
				</div>

				<?php include('musados\info.php') ?>
	

			</div>
			
		</div>
		
	</section>

</body>
</html>