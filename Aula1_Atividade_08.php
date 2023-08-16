<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="operator">Operação:</label>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required>
        <br>
        <input type="submit" name="calculate" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calculate'])){
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operator = $_POST['operator'];

        switch($operator){
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if($num2 != 0){
                    $result = $num1 / $num2;
                } else {
                    $result = "Erro: Divisão por zero!";
                }
                break;
            default:
                $result = "Operação inválida";
        }

        echo "<h3>Resultado: $result</h3>";
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>