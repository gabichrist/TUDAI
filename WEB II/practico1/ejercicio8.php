<?php

if (
    !is_numeric($_REQUEST['valor1']) ||
    !is_numeric($_REQUEST['valor2']) ||
    empty($_REQUEST['operacion'])
) {
    echo ('parametros incorrectos');
    die();
}

$operando1 = $_REQUEST['valor1'];
$operando2 = $_REQUEST['valor2'];
$operacion = $_REQUEST['operacion'];

switch ($operacion) {
        //se puede hacer por cada operacion una funcion en un archivo a parte
    case 'sumar': {
            $resultado = $operando1 + $operando2;
            break;
        }

    case 'restar': {
            $resultado = $operando1 - $operando2;
            break;
        }

    case 'multiplicar': {
            $resultado = $operando1 * $operando2;
            break;
        }
    case 'dividir': {
            $resultado = $operando1 / $operando2;
            break;
        }
    default:
        echo ('operacion no definida');
        break;
}

echo ('el resultado es:' . $resultado);
