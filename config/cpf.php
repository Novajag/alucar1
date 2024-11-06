<?php

function validarCPF($cpf) {
    // Elimina cualquier carácter que no sea un número
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verifica si el CPF tiene 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica si todos los dígitos son iguales
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Realiza la validación de los dos dígitos verificadores
    for ($i = 9; $i < 11; $i++) {
        $sum = 0;
        for ($j = 0; $j < $i; $j++) { 
            $sum += $cpf[$j] * (($i + 1) - $j);
        }
        $digit = ((10 * $sum) % 11) % 10;

        if ($cpf[$i] != $digit) {
            return false;
        }
    }

    return true;
}

// Define las variables antes de llamar a la función validarCPF


 
//if($d == false || $d2 == false) {
    //header('Location: http://localhost/dashboard/site/index.php');
    
//}
?>
