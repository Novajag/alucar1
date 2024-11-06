<?php

  
	header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if (isset($_SESSION['cliente'])){
		$cliente = $_SESSION['cliente'];
	}else{
		 header('Location: http://localhost/dashboard/site/index.php');
	 die() ;

	}

	$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
	$sql = "SELECT carroId, nomeCarros, marca, marca FROM carros"; 
	$result = $con->query($sql);

	$sql = "SELECT idalt, estatu, Idelemento, icono FROM registroalt"; 
	$result1 = $con->query($sql);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	<link rel="stylesheet" type="text/css" href="">
	<link rel="icon" href="http://localhost/dashboard/site/img/loog1.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>admin</title>
	<style type="text/css">
	body{
		overflow-y: auto;
		overflow-x:hidden;
		min-height:100vh;
	}
	body::-webkit-scrollbar {
		width: 16px;
	}

	body::-webkit-scrollbar-thumb {	
		height: 56px;
		border-radius: 8px;
		border: 4px solid transparent;
		background-clip: content-box;
		background-color: #000 ;
	}

	.contain-info{
		height:90%;


	}
	
	.contain-info-1{
		background:#ffffff;
		 border-radius:10px; 
		 height: 90vh; 
		 overflow-y: auto;
		overflow-x:hidden; 
	}
	.contain-info-1::-webkit-scrollbar {
		width: 16px;
	}
	.contain-info-1::-webkit-scrollbar-thumb {	
		height: 56px;
		border-radius: 8px;
		border: 4px solid transparent;
		background-clip: content-box;
		background-color: #000 ;
	}
	section{
		background:linear-gradient(to left top,#000000, #474747 , #eeeeee , #474747,#000000 );
		padding:30px;
		height:100%;
	}
	.op-title:hover{
		background:#000;
		color:#fff;
		border-radius:7px;
		transition:all 0.4s;		

	}
	.tabla-c{
		width: 100%;
		height: 70%;
		overflow-y: auto;
    	overflow-x: hidden;
		border-radius:10px;
	
	}
	.tabla-c::-webkit-scrollbar {
		width: 16px;
	}

	.tabla-c::-webkit-scrollbar-thumb {	
		height: 56px;
		border-radius: 8px;
		border: 4px solid transparent;
		background-clip: content-box;
		background-color: #000 ;
	}
	.text-t{
		font-size:12px;
	}

	.buton-t{
		font-size:12px;
		border:none;
		background:none;
	}
	@media (max-width:570px){
		section{
			padding:30px 0px 30px 40px;
		}
	}
	@media (max-width:378px){
		section{
			padding:30px 0px 30px 20px;
		}
	}
	

</style>
</head>

<body class="bd">
	<?php include ('musados/nav.php'); ?>
	<section class="row   containt text-center "  style=" ">
		<div class=" col-10 col-sm-12 col-md-3 m-3 p-4 " style="background: #ffffff; border-radius:10px;">
			<h6 class="m-1 p-3 op-title" id="1" onclick="info(1)">Bem-vindo</h6>
			<h6 class="m-1 p-3 op-title" id="2" onclick="info(2)">Usuarios cadastrados</h6>
			<h6 class="m-1 p-3 op-title" id="3" onclick="info(3)">Controlede veiculos</h6>
			<h6 class="m-1 p-3 op-title" id="4"  onclick="info(4)">Agendas de veiculos</h6>
		</div>
		<div class="col-10 col-sm-12 col-md-8 m-3  row p-2  contain-info-1" id="contain" style="">
			<?php	  
				echo "
            	<div class='col-xs-12 col-md-12 m-3 p-4 contain-info' style='border-radius:10px;'>
                	<h4>Bem-vindo administrador :) <img src='http://localhost/dashboard/site/animation/egn.gif' alt='Icono animado' style='width: 50px; height: auto;'></h4>
                	<p>neste painel você terá funções para poder gerenciar um site de forma fácil e intuitiva.</p>
                	<h4 class='m-4'>Registro <img src='http://localhost/dashboard/site/animation/alt.gif' alt='Icono animado' style='width: 50px; height: auto;'></h4>
                	<div class='tabla-c col-12' style='height: 278px;'>
                    	<table class='table table-dark table-hover'>
                        	<tr>
                            	<td class='table-dark'>Id</td>
                            	<td class='table-dark'>nome</td>
                            	<td class='table-dark'>status</td>
                            	<td class='table-dark'>Id-elemento</td>
                            	<td class='table-dark'>data</td>
                            	<td class='table-dark'>icone</td>
                        	</tr>";
                        	$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
                        	$sql = "SELECT idalt,nome,estatu,Idelemento,datas FROM registroalt"; 
                        	$result1 = $con->query($sql);
                        	if ($result1->num_rows > 0) {
                            	$result1->data_seek(0);
                            	while ($row = $result1->fetch_assoc()) {
                                	echo "
                                	<tr>
                                    	<td class='table table-secondary text-t'> " . $row['idalt'] . "</td>
                                    	<td class='table table-secondary text-t'>" . $row['nome'] . "</td>
                                    	<td class='table table-secondary text-t'>" . $row['estatu'] . "</td>
                                    	<td class='table table-secondary text-t'>" . $row['Idelemento'] . "</td>
                                    	<td class='table table-secondary text-t style='with:300px;''>" . $row['datas'] . "</td>
                                    	<td class='table table-secondary'>
                                        	<form action='http://localhost/dashboard/site/config/ad-delet.php' method='post'>
                                            	<input type='hidden' name='delet' value='" . $row['idalt'] . "'>
                                            	<button class='buton-t' type='submit'>
                                                	<span class='material-symbols-outlined'>delete</span>
                                            	</button>
                                        	</form>
                                    	</td>
                                	</tr>";
                            	}
                        	} else {
                            	echo "
                            	<tr>
                                	<td colspan='5' class='table-dark'>0 resultados</td>
                            	</tr>";
                        	}
    
            		echo "
                	    </table>
                	</div>
            	</div>";
			?>				
		</div>
	</section>
	<script type="text/javascript">
		function info(id) { 
    	var xhr = new XMLHttpRequest(); // Crea una nueva solicitud AJAX.
    	xhr.open("POST", "config/admin-funtion.php", true); // Configura la solicitud como POST y le indica la URL a la que se enviará.
    	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // Establece el formato de los datos que se van a enviar (formato URL).
    	xhr.onreadystatechange = function () {
        	if (xhr.readyState === 4 && xhr.status === 200) { // Verifica que la solicitud esté completada y que la respuesta sea exitosa.
            	document.getElementById("contain").innerHTML = xhr.responseText; // Actualiza el contenido del div "informacion" con la respuesta del servidor.
        	}
    	};
	    	xhr.send("id=" + id); // Envía la solicitud al servidor, pasando el ID del botón que fue presionado.
		};

	</script>


</body>
</html>