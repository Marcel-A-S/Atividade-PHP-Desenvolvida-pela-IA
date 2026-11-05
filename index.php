<?php
$carro = [
    "carro" => "Fusca",
    "marca" => "Volkswagen",
    "ano" => 1970
];

foreach ($carro as $chave => $valor) {
    echo $chave . ": " . $valor;
    echo "<br>";
}
?>