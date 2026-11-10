<?php

$alunos = [
    ["nome" => "Ana", "idade" => 34],
    ["nome" => "Carlos", "idade" => 20]
];

foreach ($alunos as $aluno) {
    echo $aluno["idade"];
    echo "<br>";
}

?>