<?php 

session_start();

$formulario=$_POST['formulario'] ?? '';


//  fazer logim   //

 if ($formulario == "logim") {

 	//---faz a conexão com o banco de dadosfaz a conexão com o banco de dados e extrai bariabes do index.html----//

 	$con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion');        
	$cpf=$_POST['cpf-c'] ?? '';  
	$password=$_POST['senha-c'] ?? '';  

	// -----------------faz a consulta-----------------------------//

	$sql ="SELECT * FROM `j` WHERE `cpf`='$cpf' and `senha`='$password'";  
	$resultado1=mysqli_query($con,$sql) or die ('Error en el query database' .mysqli_error($con));
	
	//----------ele verifica se encontrou um registro -----------//

	if (mysqli_num_rows($resultado1) == true ){

       	$usuario = mysqli_fetch_assoc($resultado1);
       	//Se o resultado for verdadeiro, salve as informações na seção para serem utilizadas posteriormente//
        if ($usuario) {
       	    $_SESSION['cliente'] = true ;
    		$_SESSION['id'] = $usuario['id'];
    		$_SESSION['username'] = $usuario['nome'];
    		$_SESSION['cpf'] = $usuario['cpf'];
    		$_SESSION['produto'] = $usuario['produto'];

        }
        //feche a conexão e redirecione o usuário para a página principal//
       	mysqli_free_result($resultado1);
    	mysqli_close ($con); 
    
    	header('Location: http://localhost/dashboard/site/inicio.php');
  
    

   		echo "resgistrado";	
   		
   		exit();
	}else{

      echo 'NO esta registrado';
	}

 }
 else{
  	$servername="Localhost";
 	$database="usuario";
 	$username="root";
 	$password="";
 	$con = new PDO("mysql:host=$servername;dbname=$database", $username,$password);


	 // iniciar conexão com o banco de dados//

 	$nome2=$_POST['nome-c2'];
	$cpf2=$_POST['cpf-c2'];  
	if ("admin-usuario" == $formulario ){
		$senha2=$_POST['senha-c2']; 
		$senha3=$senha2;
		$valido= true; 
	}else{
		$senha2=$_POST['senha-c2']; 
		$senha3=$_POST['senha-c3'];
	}


	// validação de cpf //

	include ('cpf.php');



	$vlf = validarCPF($cpf2);
	$d = true;
	$d2 = true;

	// controle para que os dados estejam corretos //

	if ($vlf == false) {

   	 	echo "<script>alert('CPF inválido'); window.location.href = 'http://localhost/dashboard/site/index.php';</script>";
    	$d = false;
    	exit();
	}

	if ($senha2 != $senha3) {
    	echo "<script>alert('Deve escrever a mesma senha em ambos os campos'); window.location.href = 'http://localhost/dashboard/site/index.php';</script>";
    	$d2 = false;
    	exit();
	}

	if (true) {
		$status = "cadastro";
		$datas = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO j (nome, cpf, senha, produto) VALUES (:nome2, :cpf2, :senha2, :produto)";
		$stmt = $con->prepare($sql);
		$stmt->execute([':nome2' => $nome2, ':cpf2' => $cpf2, ':senha2' => $senha2, ':produto' => 1]);

		
		$id = $con->lastInsertId();
		

		$sqls = "INSERT INTO registroalt (nome, estatu, idelemento, datas) VALUES (:nome2, :status, :id, :datas)";
		$stmt2 = $con->prepare($sqls);
		$stmt2->execute([':nome2' => $nome2, ':status' => $status, ':id' => $id, ':datas' => $datas]);
	

		if ($valido) {
			header('Location: http://localhost/dashboard/site/admin.php');
		} else {
			header('Location: http://localhost/dashboard/site/index.php');
		}
	};
	
};

    
 
?>

