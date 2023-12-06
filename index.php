<?php
if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
    function factorial($n)
    {
        $resultado = 1;
        for ($x = 1; $x <= $n; $x++) {
            $resultado *= $x;
        }
        return $resultado;
    }
    $resultado = factorial($numero);
    echo "El factorial de $numero es $resultado.";
    //Pintag Llanganate
}
