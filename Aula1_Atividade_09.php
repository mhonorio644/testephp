<hr>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Países</title>
</head>
<body>
    <h2>Lista de Países</h2>

    <?php
    $paises = array(
        "Brasil",
        "Estados Unidos",
        "Canadá",
        "Austrália",
        "Japão",
        "França",
        "Alemanha",
        "China",
        "Índia",
        "Itália"
    );

    echo "<ul>";
    for ($i = 0; $i < count($paises); $i++) {
        echo "<li>" . ($i + 1) . "-" . $paises[$i] . "</li>";
    }
    echo "</ul>";
    ?>
</body>

<h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

</html>