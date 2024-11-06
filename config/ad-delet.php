<?php
    $delet=$_POST['delet'] ?? ''; 
    echo $delet;
    $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 

    $sql ="DELETE  FROM `carros` WHERE `carroId`='$delet'";  
    $resultado1=mysqli_query($con,$sql) or die ('Error en el query database' .mysqli_error($con));
    mysqli_close ($con); 
    
    header('Location: http://localhost/dashboard/site/admin.php');
?>

