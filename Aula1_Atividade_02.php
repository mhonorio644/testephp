<!DOCTYPE html>
<html>
<head>
    <title>Digite o salario atual</title>
</head>
<body>
    <h2>Salario</h2>
    <form method="post" action="">
        <label for="salario">Digite o valor do salario:</label>
        <input type="number" name="salario" required>
        <input type="submit" name="calcular" value="Reajustar">
    </form>

    <?php

        // Verifique as regras de reajuste e calcule o salário reajustado
        if(isset($_POST['calcular'])){
            $salario = intval($_POST['salario']);

            if ($salario <= 1000) {
                $reajuste = 0.5; // 50%
            } else {
                $reajuste = 0.3; // 30%
            }
            
            $salarioReajustado = $salario * (1 + $reajuste);

            // Imprima o salário reajustado
            echo "Salário original: R$" . number_format($salario, 2, ',', '.') . "<br>";
            echo "Salário reajustado: R$" . number_format($salarioReajustado, 2, ',', '.');
        }
    ?>

</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>