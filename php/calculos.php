<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];
    
    switch ($operacao) {
        case "soma":
            $resultado = $numero1 + $numero2;
            echo "O resultado da adição é: $resultado";
            break;
        case "subtracao":
            $resultado = $numero1 - $numero2;
            echo "O resultado da subtração é: $resultado";
            break;
        case "multiplicacao":
            $resultado = $numero1 * $numero2;
            echo "O resultado da multiplicação é: $resultado";
            break;
        case "divisao":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                echo "O resultado da divisão é: $resultado";
            } else {
                echo "Não é possível dividir por zero.";
            }
            break;
        default:
            echo "Operação inválida.";
    }
}
?>
