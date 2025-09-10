<?php
$mensagemGlobal = "Variável Global";

function testarVariavel() {

    $mensagemLocal = "Variável Local";
    
    echo "$mensagemLocal <br>";

    global $mensagemGlobal;
    echo "$mensagemGlobal <br>";
}

testarVariavel();

echo "<br> $mensagemGlobal"; 
?>