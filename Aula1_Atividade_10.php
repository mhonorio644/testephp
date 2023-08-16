<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Números de Dois em Dois</title>
</head>
<body>
    <h2>Números de Dois em Dois</h2>
    <form method="post" action="">
        <label for="valor1">Digite o primeiro valor:</label>
        <input type="number" name="valor1" required>
        <br>
        <label for="valor2">Digite o segundo valor:</label>
        <input type="number" name="valor2" required>
        <br>
        <input type="submit" name="exibir" value="Exibir">
    </form>

    <?php
    if(isset($_POST['exibir'])){
        $valor1 = intval($_POST['valor1']);
        $valor2 = intval($_POST['valor2']);

        if ($valor2 > $valor1) {
            echo "<h3>Números de dois em dois entre $valor1 e $valor2:</h3>";

            for ($i = $valor1; $i <= $valor2; $i += 2) {
                echo "$i ";
            }
        } else {
            echo "<p>O segundo valor deve ser maior que o primeiro.</p>";
        }
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>