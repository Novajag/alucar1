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
// Verificar si se ha recibido el ID
$producto = null;
$id = null;
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convertir el ID a un número entero para 

     $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion');


    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    // Consulta para obtener los detalles del producto
    $sql = "SELECT * FROM carros WHERE carroId = $id";
    $result = $con->query($sql);
    $producto = $result->fetch_assoc();
    $con->close();
} else {
    die("ID no proporcionado. ");
}
?>

<?php

// Crear una conexión a la base de datos
$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion');

// Verificar si la conexión fue exitosa
if ($con->connect_error) {
    die('Error de conexión: ' . $con->connect_error);
}

// Consulta SQL para obtener los datos (suponiendo que la columna se llama 'valor' y la tabla se llama 'datos')
$media = 0;
$sql = "SELECT puntos FROM puntos WHERE carroId = $id";
$result = $con->query($sql);

// Verificar si la consulta devuelve resultados
if ($result->num_rows > 0) {
    $suma = 0;
    $cantidad = 0;

    // Iterar sobre los resultados y sumar los puntos
    while ($row = $result->fetch_assoc()) {
        $valor = $row['puntos'];
        $suma += $valor;
        $cantidad++;
    }

    // Calcular la media
    if ($cantidad > 0) {
        $media = $suma / $cantidad;
    } else {
        $media = 0; // Evitar división por cero
    }


}



// Cerrar la conexión a la base de datos
$con->close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>alugecar</title>
	<link rel="stylesheet" type="text/css" href="stylo.css">
		<link rel="icon" href="http://localhost/dashboard/site/img/loog1.png" type="image/x-icon">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	    <style type="text/css">
	    	.validacao{
	    		color: 	#000000;
	    	}

	    	.validacao-1{
	    		color: 	#FF8C00;
	    	}
	    	.carousel-item img {
            	height: 100%;
            	width: 100%;
            	object-fit: cover; /* Asegura que la imagen cubra el contenedor sin distorsionarse */
        	}

        	.ag{
        		
        	}
        	.ag1{
        		left: -50%;
        	}
        	.ag2{
        		left: 50%;
        	}
	    </style>
</head>
<body>
	<?php include('nav.php')?>
	<a href="../inicio.php" >
		<button class="btn btn-dark position-absolute z-3">
			<span class="material-symbols-outlined">arrow_back</span>
		</button>
	</a>

	<section>
		<div class="row" >
			<div class="col-6 contain text-center">


				<div id="carouselExampleIndicators" class="carousel slide z-1" data-ride="carousel">
  					<ol class="carousel-indicators">
    					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  					</ol>
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img class="d-block w-100" src="<?php echo $producto["img"]; ?>" style=" height: 400px; object-fit: cover;" alt="First slide">
    					</div>
    					<div class="carousel-item">
      						<img class="d-block w-100" src="<?php echo $producto["img1"]; ?>" style=" height: 400px; object-fit: cover;">
    					</div>
    					<div class="carousel-item">
      						<img class="d-block w-100" src="<?php echo $producto["img2"]; ?>" style=" height: 400px; object-fit: cover;">
    					</div>
  					</div>
  					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
				</div>
				<div class="ps-5 pt-2 mt-2 row contain text-center ">
					<b class="col-5 ms-5 p-3 w-50 h-50 bg-black text-white border border-black rounded-start-2" style=" font-size: 18px;">Media de puntuacao </b>
					<b class="col-4 p-3 bg-light text-dark border border-black rounded-end-2 " style=" font-size: 18px;">
						<?php echo $media;?>
					</b>
				</div>
				<div class="p-4  ">
					<button class="btn btn-link " onclick="nv = 1; validacao(vl1,vl2,vl3,vl4,vl5, nv); ">
						<span class="material-symbols-outlined validacao" id="vl1">star</span>
					</button>
					<button class="btn btn-link " onclick="nv = 2; validacao(vl1,vl2,vl3,vl4,vl5, nv);">
						<span class="	material-symbols-outlined validacao" id="vl2">star</span>
					</button>									
					<button class="btn btn-link" onclick="nv = 3; validacao(vl1,vl2,vl3,vl4,vl5, nv);">
						<span class="	material-symbols-outlined validacao" id="vl3">star</span>
					</button>
					<button class="btn btn-link " onclick="nv = 4; validacao(vl1,vl2,vl3,vl4,vl5, nv);">
						<span class="	material-symbols-outlined validacao" id="vl4">star</span>
					</button>
					<button class="btn btn-link " onclick="nv = 5; validacao(vl1,vl2,vl3,vl4,vl5, nv);">
						<span class="	material-symbols-outlined validacao" id="vl5">star</span>
					</button>

				</div>
			</div>
			<div class="col-4">
				<div class=" w-100 h-100 ">
					<h5 class="m-2 p-3">					
						<b>nome</b>
						<p><?php echo $producto["nomeCarros"]; ?></p>
					</h5>
					<h5 class="m-2 p-3">					
						<b>kilometraje</b>
						<p><?php echo $producto["kilo"]; ?></p>
					</h5>
					<h5 class="m-2 p-3">
						<b>velocidade</b>
						<p><?php echo $producto["velocidade"]; ?></p>
					</h5>
					<h5 class="m-2 p-3">	
						<b>cavalos de força</b>
						<p><?php echo $producto["força"]; ?></p>
					</h5>
					<h5 class="m-2 p-3">
						<b>estado do carro</b>
						<p><?php echo $producto["estado"]; ?></p>
					</h5>


				</div>
			</div>
		</div>
		<div class="w-50 mb-5">
			<h1>
				pagamento mensal: <?php echo $producto["preço"]; ?>
			</h1>	

		</div>
		<div class="w-50 mb-4" style="height: 75px;">
			<button id="gbtn1" onclick="agendar (agenda)" class="btn btn-dark h-100 w-100">
				agendar
			</button>
		</div>
		<?php include('info.php') ?>

		<div class="  ag1 z-5 p-4 roundeds position-fixed  container text-center bg-body-tertiary rounded" style="height:100px; width:400px; background-color: #CACFD2 ; z-index: 9999; top: 50%; transform: translateX(-50%);" id="agenda">
      		<form action="agendas1.php" method="post" class="d-flex" role="search">
        		<input class="form-control me-2 " type="number" name="agendas" placeholder="Quantos dias vai alugar?
        		 " aria-label="Search">
        		 <input type="hidden" name="idcarro" value="<?php echo $id; ?>">
        		<button class="btn btn-dark" onclick="agendar (agenda)" type="submit" id="gbtn2">agendar</button>
      		</form>
		</div>


		
	</section>
	<script type="text/javascript">
        var agenda = document.getElementById('agenda')

        function agendar (agenda) {

        	if (agenda.classList.contains('ag1')) {
				agenda.classList.remove("ag1");
				agenda.classList.add("ag2");

			}else{
				agenda.classList.remove("ag2");
				agenda.classList.add("ag1");
			}
       	};



		/*validaçao*/
		var vl1 = document.getElementById('vl1');
		var vl2 = document.getElementById('vl2');
		var vl3 = document.getElementById('vl3');
		var vl4 = document.getElementById('vl4'); 
		var vl5 = document.getElementById('vl5');
			function enviarValor(nv) {
            	// Variable de JavaScript
            	var id = <?php echo json_encode($id); ?>;

           		var xhr = new XMLHttpRequest();
            	xhr.open("POST", "http://localhost/dashboard/site/config/validaçao.php", true);
            	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            	xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                	 // Aquí manejas la respuesta del servidor
                	alert(xhr.responseText);
                }
            };

           	// Enviar el valor de jkl al servidor
          	xhr.send("nv=" + encodeURIComponent(nv) + "&id=" + encodeURIComponent(id));
        }
		function validacao(vl1,vl2,vl3,vl4,vl5, nv) {

			if (nv == 1) {
				
				if (vl1.classList.contains("validacao")) {
					vl1.classList.remove("validacao");
					vl1.classList.add("validacao-1");
					var vld = 1;
					enviarValor(vld);
					

				}
				else {
					vl1.classList.remove("validacao-1");
					vl1.classList.add("validacao");
					vl2.classList.remove("validacao-1");
					vl2.classList.add("validacao");
					vl3.classList.remove("validacao-1");
					vl3.classList.add("validacao");
					vl4.classList.remove("validacao-1");
					vl4.classList.add("validacao");
					vl5.classList.remove("validacao-1");
					vl5.classList.add("validacao");
					var vld = 0;
					enviarValor(vld);
					
					
				}

			}
			
			if (nv == 2) {
				if(vl2.classList.contains("validacao")){
					vl1.classList.remove("validacao");
					vl1.classList.add("validacao-1");
					vl2.classList.remove("validacao");
					vl2.classList.add("validacao-1");
					var vld = 2;
					enviarValor(vld);

				}
				else{
					vl2.classList.remove("validacao-1");
					vl2.classList.add("validacao");
					vl3.classList.remove("validacao-1");
					vl3.classList.add("validacao");
					vl4.classList.remove("validacao-1");
					vl4.classList.add("validacao");
					vl5.classList.remove("validacao-1");
					vl5.classList.add("validacao");
					var vld = 1;
					enviarValor(vld);
				}
			}

			if (nv == 3) {
				if(vl3.classList.contains("validacao")){
					vl1.classList.remove("validacao");
					vl1.classList.add("validacao-1");
					vl2.classList.remove("validacao");
					vl2.classList.add("validacao-1");
					vl3.classList.remove("validacao");
					vl3.classList.add("validacao-1");
					var vld = 3;
					enviarValor(vld);

				}
				else{
					vl3.classList.remove("validacao-1");
					vl3.classList.add("validacao");
					vl4.classList.remove("validacao-1");
					vl4.classList.add("validacao");
					vl5.classList.remove("validacao-1");
					vl5.classList.add("validacao");
					var vld = 2;
					enviarValor(vld);				}
			}


			if (nv == 4) {
				if(vl4.classList.contains("validacao")){
					vl1.classList.remove("validacao");
					vl1.classList.add("validacao-1");
					vl2.classList.remove("validacao");
					vl2.classList.add("validacao-1");
					vl3.classList.remove("validacao");
					vl3.classList.add("validacao-1");
					vl4.classList.remove("validacao");
					vl4.classList.add("validacao-1");
					var vld = 4;
					enviarValor(vld);

				}
				else{
					vl4.classList.remove("validacao-1");
					vl4.classList.add("validacao");
					vl5.classList.remove("validacao-1");
					vl5.classList.add("validacao");
					var vld = 3;
					enviarValor(vld);
				}
			}

			if (nv == 5) {
				if(vl5.classList.contains("validacao")){
					vl1.classList.remove("validacao");
					vl1.classList.add("validacao-1");
					vl2.classList.remove("validacao");
					vl2.classList.add("validacao-1");
					vl3.classList.remove("validacao");
					vl3.classList.add("validacao-1");
					vl4.classList.remove("validacao");
					vl4.classList.add("validacao-1");
					vl5.classList.remove("validacao");
					vl5.classList.add("validacao-1");
					var vld = 5;
					enviarValor(vld);

				}
				else{
					vl5.classList.remove("validacao-1");
					vl5.classList.add("validacao");
					var vld = 4;
					enviarValor(vld);
				}
			}



			
				
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>