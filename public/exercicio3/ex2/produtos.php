<?php
$produtos = [
    "Caixa de Ovo" => 10,
    "Caixa de Leite" => 5,
    "Azeite" => 8,
    "Pinho Sol" => 14,
    "Café" => 15,
];

$total = 0;
foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " , $preco, "<br>";
    
    $total += $preco;
}

echo "<br>", "Valor total da compra: R$ " , $total;
?>