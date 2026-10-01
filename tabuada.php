<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Divertida</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="card">
        <div class="icon-badge">🔢</div>
        <h1>Tabuada</h1>
        <p class="subtitle">Escolha um número para gerar a tabuada completa:</p>
        <hr>
        <?php
        $numero = (int) $_POST['numero'];
        ?>
        <table>
        <thead>
            <tr>
                <th>Número</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
        <?php // Reabre o PHP
        // for ($i = 1; $i <= 10; $i++) {
        //    $r = $numero * $i;
        //    echo "<tr>";
        //    echo "<td>$numero x $i</td>";
        //    echo "<td class=\"result\">$r</td>";
        //    echo "</tr>";
        // }
        $contador = 1;
        while ($contador <= 10){
            $r = $numero * $contador;
            echo "<tr>";
            echo "<td>$numero x $contador</td>";
            echo "<td>$r</td>";
            echo "</tr>";
            $contador++;
        }
        ?>
        </tbody>
        </table>
        <a href="index.html" class="btn-back">Voltar ao Menu</a>
    </main>
</body>
</html>