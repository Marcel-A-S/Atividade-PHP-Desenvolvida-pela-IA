<?php

$alunos = [
    ["nome" => "Ana", "idade" => 20],
    ["nome" => "Carlos", "idade" => 22]
];

foreach ($alunos as $aluno) {
    echo $aluno["idade"];
    echo "<br>";
}

?>