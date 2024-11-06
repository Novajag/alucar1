<!DOCTYPE html>
<html>
<head>
	<title>alucar</title>
		<link rel="stylesheet" type="text/css" href="">
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
	    		left: 160px;
	    		bottom: 3em;
  				font-family: "Lugrasimo", cursive;
  				font-size: 10em;
  				font-style: normal;
  				color:#fff ;
			}

	    	
	    </style>
	    
</head>
<body>
	<?php include ('musados\nav.php'); ?>
	<section class="row">
		<div class="position-relative z-1 w-100 contain tex-center" >
			<img class="w-100 h-50 div-img"  src="https://img.freepik.com/fotos-gratis/os-farois-e-o-capo-de-um-carro-preto-de-luxo_146671-19730.jpg?w=900&t=st=1713563764~exp=1713564364~hmac=2312ab1b6790fffbe7bb1bfdae9058761c56395ac0024b0c55f3b58cc7878cb9">
			<h1 class="position-absolute titulo">Bem-vindo</h1>
		</div>
		<div class="position-relative ">
			<div class=" position-absolute  row row-cols-4 a p-5 w-100 h-100 ">
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>					
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>
				<?php include ('musados\mostrar.php'); ?>

				<?php include('\musaos\info.php') ?>
	

			</div>
		</div>
		
	</section>

</body>
</html>