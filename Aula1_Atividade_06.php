<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Valores Intermediários</title>
</head>
<body>
    <h2>Valores Intermediários</h2>
    <form method="post" action="">
        <label for="primeiro">Primeiro Valor:</label>
        <input type="number" name="primeiro" required>
        <br>
        <label for="segundo">Segundo Valor:</label>
        <input type="number" name="segundo" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $primeiro = intval($_POST['primeiro']);
        $segundo = intval($_POST['segundo']);

        if ($primeiro < $segundo) {
            for ($i = $primeiro + 1; $i < $segundo; $i++) {
                echo $i . " ";
            }
        } elseif ($segundo < $primeiro) {
            for ($i = $segundo + 1; $i < $primeiro; $i++) {
                echo $i . " ";
            }
        } else {
            echo "Os valores são iguais.";
        }
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>