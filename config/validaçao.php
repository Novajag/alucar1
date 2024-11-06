
<?php
header('Content-Type: text/html; charset=UTF-8');
//Iniciar una nueva sesión o reanudar la existente.
session_start();
 //Si existe la sesión "cliente"..., la guardamos en una variable
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el valor nv ha sido enviado
    if (isset($_POST['nv'])) {
        // Obtener el valor de nv
        $nv = $_POST['nv'];
        $id = $_POST['id'];
        $username = $_SESSION['username'];

        // Aquí puedes procesar el valor como necesites
        // Por ejemplo, guardarlo en una base de datos, realizar cálculos, etc.
        $username = $_SESSION['username'];
        $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
        $sql = "INSERT INTO puntos (carroId,nome,puntos)
                                                 VALUES ('$id', '$username','$nv')";
        $result = $con->query($sql);


        $username = $_SESSION['username'];

        // Responder con un mensaje de éxito
    } else {
        // Responder con un mensaje de error si nv no está definido
        echo "No se recibió ningún valor.";
    }
} else {
    // Responder con un mensaje de error si no se utilizó el método POST
    echo "Método no permitido.";
}
?>
