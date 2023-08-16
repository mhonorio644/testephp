<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Notas</title>
</head>
<body>
    <h2>Verificação de Notas</h2>
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" required>
        <br>
        <label for="nota3">Nota 3:</label>
        <input type="text" name="nota3" required>
        <br>
        <label for="nota4">Nota 4:</label>
        <input type="text" name="nota4" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']);
        $nota3 = floatval($_POST['nota3']);
        $nota4 = floatval($_POST['nota4']);
        
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<h3>Média: " . number_format($media, 2, '.', '') . "</h3>";

        if($media >= 7.0){
            echo "<p>Aprovado</p>";
        } elseif($media >= 4.0){
            echo "<p>Recuperação</p>";
        } else {
            echo "<p>Reprovado</p>";
        }
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>
 