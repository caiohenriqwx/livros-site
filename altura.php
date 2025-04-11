<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Altura dos Alunos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            background: white;
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
            color: #4A00E0;
        }
        p {
            font-size: 18px;
            text-align: center;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        li {
            background-color: #f0f0f0;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            transition: 0.3s;
        }
        li:hover {
            background-color: #d0e8ff;
        }
        .badge {
            background-color: #4A00E0;
            color: white;
            padding: 3px 8px;
            border-radius: 6px;
            font-size: 13px;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Altura dos Alunos da Sala</h1>

        <?php
        $alunos = [
            ["nome" => "Marcos", "idade" => 10, "altura" => 1.30],
            ["nome" => "Ana", "idade" => 12, "altura" => 1.50],
            ["nome" => "Maria", "idade" => 15, "altura" => 1.61],
            ["nome" => "Pedro", "idade" => 14, "altura" => 1.62],
            ["nome" => "Mirta", "idade" => 14, "altura" => 1.40],
            ["nome" => "João", "idade" => 15, "altura" => 1.60],
            ["nome" => "Barbara", "idade" => 12, "altura" => 1.30],
            ["nome" => "Marcos", "idade" => 14, "altura" => 1.45],
            ["nome" => "Absalão", "idade" => 15, "altura" => 1.64],
            ["nome" => "Paulo", "idade" => 14, "altura" => 1.30]
        ];

        $soma_alturas = 0;
        $total_alunos = count($alunos);

        for ($i = 0; $i < $total_alunos; $i++) {
            $soma_alturas += $alunos[$i]["altura"];
        }

        $media_altura = $soma_alturas / $total_alunos;
        echo "<p><strong>Média das Alturas:</strong> " . number_format($media_altura, 2) . " m</p>";

        echo "<h2>Alunos com mais de 13 anos e altura abaixo da média:</h2>";
        echo "<ul>";

        for ($i = 0; $i < $total_alunos; $i++) {
            $aluno = $alunos[$i];
            if ($aluno["idade"] > 13 && $aluno["altura"] < $media_altura) {
                echo "<li>
                        <strong>{$aluno['nome']}</strong> 
                        <span class='badge'>{$aluno['idade']} anos</span> 
                        <span class='badge'>{$aluno['altura']} m</span>
                      </li>";
            }
        }

        echo "</ul>";
        ?>
    </div>
</body>
</html>
