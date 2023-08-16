<?php
// Criando uma variável "clientes" como uma array
$clientes = array(
    array(
        'nome' => 'Fernanda Batista Silva',
        'endereço' => 'Rua Joao jose Zattar, 589',
        'telefones' => array(
            'residencial' => '(41) 3076-5432',
            'comercial' => '(141) 1234-5678'
        )
    ),
    array(
        'nome' => 'Vitor Marcelo Honorio',
        'endereço' => 'Rua Pedro Valdecir, 348',
        'telefones' => array(
            'residencial' => '(41) 3089-2457',
            'comercial' => '(41) 2154-8564'
        )
    ),
    array(
        'nome' => 'Mateus Honorio',
        'endereço' => 'Rua Reinaldo Stocco, 564',
        'telefones' => array(
            'residencial' => '(41) 3071-5489',
            'comercial' => '(41) 2189-5353'
        )
    )
);

// Exibindo o nome e telefone residencial de cada cliente
foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente['nome'] . "<br>";
    echo "Telefone Residencial: " . $cliente['telefones']['residencial'] . "<br><br>";
}
?>

    <h3>
        <A href="index.php"> VOLTAR </a></p>
    </h3>

<hr>