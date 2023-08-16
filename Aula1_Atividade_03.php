<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Peso Ideal</title>
</head>
<body>
    <h2>Cálculo de Peso Ideal</h2>
    <form method="post" action="">
        <label for="altura">Altura (em metros):</label>
        <input type="text" name="altura" required>
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="homem">Homem</option>
            <option value="mulher">Mulher</option>
        </select>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $altura = floatval($_POST['altura']);
        $sexo = $_POST['sexo'];
        
        if($sexo == 'homem'){
            $pesoIdeal = (72.7 * $altura) - 58;
        } elseif($sexo == 'mulher'){
            $pesoIdeal = (62.1 * $altura) - 44.7;
        } else {
            echo "Sexo inválido.";
            exit;
        }

        echo "<h3>Peso Ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg</h3>";
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>