<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.12);
        }

        h1 {
            margin: 0 0 24px;
            text-align: center;
            color: #2563eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            color: #ffffff;
            background-color: #2563eb;
        }

        tbody tr:hover {
            background-color: #eff6ff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Lista de alunos</h1>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $alunos = [
                    ["nome" => "Ana", "idade" => 20],
                    ["nome" => "Carlos", "idade" => 22]
                ];

                foreach ($alunos as $aluno) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($aluno["nome"]) . "</td>";
                    echo "<td>" . htmlspecialchars((string) $aluno["idade"]) . " anos</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
