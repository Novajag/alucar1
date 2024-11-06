<?php
    $nome=$_POST['delet-nome'] ?? ''; 
    $status=$_POST['delet-status'] ?? ''; 
    $id=$_POST['delet-id'] ?? '';
    $datas=$_POST['delet-data'] ?? '';

    echo $id;
    $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
    $sqls = "INSERT INTO registroalt (nome,estatu,idelemento,datas) VALUES ('$nome', '$status','$id','$datas ')";
    mysqli_query($con,$sqls) or die ('Error en el query database' .mysqli_error($con));

    $sql ="DELETE  FROM `j` WHERE `id`='$id'";  
    mysqli_query($con,$sql) or die ('Error en el query database' .mysqli_error($con));
    mysqli_close ($con); 
    
    
    header('Location: http://localhost/dashboard/site/admin.php');
?>

