<?php
// URL da API de terceiros
$apiUrl = 'https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1';

// Realiza uma requisição GET para a API
$response = file_get_contents($apiUrl);

// Decodifica a resposta JSON
$data = json_decode($response);

// var_dump($data);

// Verifica se a resposta foi bem-sucedida e exibe os dados
if ($data !== null) {
    foreach ($data as $key => $value) {
        // Aqui você pode personalizar como deseja exibir os dados
        echo '<option value="'. $value .'">' . $value . '</option>';
    }
} else {
    echo 'Erro ao buscar dados da API';
}
?>
