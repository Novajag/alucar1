<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="stylo.css?v=2">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<title></title>
</head>
<body>
	<div class="mostrar p-4 roundeds col contain   ">
		<img class="w-100 rounded" src="<?php echo $producto["img"]; ?>"style="width: 300px; height: 150px; object-fit: cover;">
		<h6>
			
		</h6>
		<div class="row position-relative z-1">
			<div class="col">
				<h5>
					<b>Nome</b>
				</h5>
				<p style="font-size: 14px;"><?php echo $producto["nomeCarros"]; ?></p>
			</div>
			<div class="col">
			   <h5>
			   	<b>modelo</b>
			   	<p style="font-size: 14px;"><?php echo $producto["marca"]; ?></p>
			   </h5>			   
			</div>
			<div class="col">
				<h5>
			   	<b>precio</b>
			   	<p style="font-size: 14px;">$<?php echo $producto["preço"]; ?></p>
			   </h5>
			</div>
			<form class=" col">
				<button class="btn btn-dark" >
					<?php

					$idc = $producto["carroId"];
					 echo "<a style='outline: none; color:#fff;' href='http://localhost/dashboard/site/config/apagar.php?idc=" . $idc . "'>fechar agenda</a>";

					 ?>
				</button>
				
			</form>

			
		</div>
		
	</div>




</body>
</html>