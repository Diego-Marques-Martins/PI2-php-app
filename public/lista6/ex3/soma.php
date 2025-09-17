<?php
    function soma ($a, $b){
        $soma = $a + $b;
        echo "A soma de $a e $b é: $soma", "<br>";
    }
soma(5, 10);

function soma2($a, $b) {
    return $a + $b;
}
$resultado = soma2(5, 7);
echo "A soma desses números é: $resultado";
?>