
<!DOCTYPE html>


<html>
<head>
	<title>alucar</title>
	<link rel="stylesheet" type="text/css" href="stylo.css?v=2">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	    <style type="text/css">
			@media(max-width:768px){
				.prt-text-1{
					position: absolute;
					top:-300;
					opacity: 0;

				}

			}
	    </style>
</head>
<body class="body-1">
	<section  class=" position-relative">

		<!--  Formulário de registro  -->

		<div style="margin-top: px ;" class="shadow-lg w-75 p-5 prt-1 container tex-center" id="p1">

			<div class="row prt ">

				<div class=" contain text-center prt-text-1  col-6">
					<h1 class="m-4">Oi novo usuario</h1> 
					<p>Bem vindo novo usuário, é um prazer ter conosco, esperamos que goste do nosso serviço</p>
				</div>
				
				<form  action="config\conection.php" method="post" class=" container text-center col-ms-12 col-md-6">
					<h1 class="fs-3">
						Cadastrar
					</h1>

					<div class="input-group w-100 p-3 mb-1">
  						<span class="input-group-text material-symbols-outlined">person</span>
  						<div class="form-floating">
    						<input type="text" class="form-control" name="nome-c2" id="floatingInputGroup1" placeholder="Nome">
    						<label for="floatingInputGroup1">Escreva seo nome</label>
  						</div>
					</div>

					<div class="input-group w-100 p-3 mb-1">
  						<span class="input-group-text material-symbols-outlined">id_card</span>
  						<div class="form-floating">
    						<input type="numbre" class="form-control" id="floatingInputGroup1" placeholder="CPF" name="cpf-c2" min="0" max="99999999999" required="">
    						<label for="floatingInputGroup1">Escreva seu CPF</label>
  						</div>
					</div>

					<div class="input-group w-100 p-3 mb-1">
  						<span class="input-group-text material-symbols-outlined">lock</span>
  						<div class="form-floating">
    						<input type="password" class="form-control" id="floatingInputGroup1" placeholder="Escreva sua senha" name="senha-c2" required="" >
    						<label for="floatingInputGroup1">Digite uma senha</label>
  						</div>
					</div>

					<div class="input-group w-100 p-3 mb-1">
  						<span class="input-group-text material-symbols-outlined">lock</span>
  						<div class="form-floating">
    						<input type="password" class="form-control" name="senha-c3" id="floatingInputGroup1" placeholder="Confirme sua senha" required="">
    						<label for="floatingInputGroup1">Confirme sua senha</label>
  						</div>
					</div>
					<input type="hidden" value="Cadastrar" name="formulario">
					<input class=" btn btn-dark  w-50 p-3"type="submit" value="Cadastrar" name="">
					<input onclick="trocar2(p2,p1)" class="btn btn-link  w-50 p-3" type="button" value="ja tenho uma conta" id="b1" name="">
				</form>
			</div>

		</div  >
        
        <!-- formulario de logim -->

		<div style=" margin-top: 95px ;" class=" shadow-lg prt-2   w-75 p-5 container text-center" id="p2">
			<div class="row">
				<div class=" contain text-center prt-text-1 prt col">
					<h1 class="m-4">Oi ;)</h1>
					<p >Olá, bem-vindo de volta</p>
				</div>
			
				<form action="config\conection.php" method="post" class=" container text-center col-ms-12 col-md-6">
					<h1 class="fs-3">
						iniciar sessão
					</h1>
					<div class="input-group w-100 p-3 mb-1">
  						<span class="input-group-text material-symbols-outlined">person</span>
  						<div class="form-floating">
    						<input type="number" class="form-control" name="cpf-c" id="floatingInputGroup1" placeholder="CPF" min="0" max="99999999999" required="">
    						<label for="floatingInputGroup1">Escreva seu cpf</label>
  						</div>
					</div>

					<div class="input-group w-100 p-3 mb-1">
  						<span class="input-group-text material-symbols-outlined">key</span>
  						<div class="form-floating">
    						<input type="password" class="form-control" name="senha-c" id="floatingInputGroup1" placeholder="Sua senha">
    						<label for="floatingInputGroup1">Escreva sua senha</label>
  						</div>
					</div>
					<input type="hidden" name="formulario" value="logim">
					<input class="btn btn-dark w-50 p-3 " type="submit" value="entrar">
					<input onclick="trocar1(p2,p1)" class="btn btn-link w-50"  type="button" value="Nao tenho uma conta" id="b2" name="">
				</form>
			</div>
		</div>

	</section>


	<?php
	/*

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

 			include ('config\conection.php'); 	
 		
	 	} 	 */

 	?>
<script src="config\dinamico.js" ></script>
</body>
</html>