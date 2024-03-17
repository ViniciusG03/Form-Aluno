<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styletable.css">
</head>
<body>
    <div class="container">
    <?php
        $aluno = $_POST["aluno"];

        $nota1 = str_replace(",", ".", $_POST["nota1"]);
        $nota2 = str_replace(",", ".", $_POST["nota2"]);

        $floatNota1 = floatval($nota1);
        $floatNota2 = floatval($nota2);

        $media = ($nota1 + $nota2) / 2;
        $round = round($media, 2);

        if ($media < 4){
            echo "<h1> Resultado do aluno(a): $aluno</h1>
            <p>Sua nota: $round</p>
            <p>Situação: <strong>Reprovado!</strong>";
        } else if ($media >= 4 && $media < 6) {
            echo "<h1> Resultado do aluno(a): $aluno</h1>
            <p> Sua nota: $round</p>
            <p>Situação: <strong>Exame final!</strong>";
        } else {
            echo "<h1> Resultado do aluno(a): $aluno</h1>
            <p> Sua nota: $round</p>
            <p>Situação: <strong>Aprovado!</strong>";
        }
    ?>
    </div>

    <div class="box">
        <div class="linha"></div>
        <div class="empty"></div>
       <table border="1">
        <tr>
            <td><strong>Média</strong></td>
            <td><strong>Situação</strong></td>
        </tr>
        <tr>
            <td>Abaixo de 4,0</td>
            <td>Reprovado</td>
        </tr>
        <tr>
            <td>Maior ou igual a 4,0 e menor que 6,0</td>
            <td>Exame final</td>
        </tr>
        <tr>
            <td>Maior ou igual a 6,00</td>
            <td>Aprovado</td>
        </tr>   
       </table>

       <div class="link">
        <input type="button" value="Voltar" onclick="window.history.back();">
    </div>
    </div>
</body>
</html>