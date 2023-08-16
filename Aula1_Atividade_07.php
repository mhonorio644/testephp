<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post" action="">
        <label for="valor">Digite um valor:</label>
        <input type="number" name="valor" required>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $valor = intval($_POST['valor']);

        echo "<h3>Tabuada do $valor:</h3>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $valor * $i;
            echo "$valor x $i = $resultado<br>";
        }
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>