<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>

    <h1>Idade dos Alunos</h1>

    <?php
    $alunos = [
        ["nome" => "Ana", "idade" => 20],
        ["nome" => "Carlos", "idade" => 22]
    ];

    foreach ($alunos as $aluno) {
        // Exibindo o nome junto com a idade para ficar mais completo
        echo "O(a) aluno(a) " . $aluno["nome"] . " tem " . $aluno["idade"] . " anos.";
        echo "<br>";
    }
    ?>

</body>
</html>