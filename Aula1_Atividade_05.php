<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Menu de Operações</title>
</head>
<body>
    <h2>Menu de Operações</h2>
    <form method="post" action="">
        <label for="operacao">Digite o número da operação:</label>
        <input type="number" name="operacao" required>
        <input type="submit" name="executar" value="Calcular -">
    </form>

    <?php
    if(isset($_POST['executar'])){
        $operacao = intval($_POST['operacao']);

        switch($operacao){
            case 1:
                echo "Operação selecionada: Saldo Conta Corrente";
                break;
            case 2:
                echo "Operação selecionada: Sacar dinheiro";
                break;
            case 3:
                echo "Operação selecionada: Fazer empréstimo";
                break;
            case 4:
                echo "Operação selecionada: Sair";
                break;
            default:
                echo "Opção Inválida";
        }
    }
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>