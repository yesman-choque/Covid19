<?php
    $apiUrl = 'https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1';
    $response = file_get_contents($apiUrl);
    $data = json_decode($response);

    if ($data !== null) {
        foreach ($data as $key => $value) {
            echo '<option value="'. $value .'">' . $value . '</option>';
        }
    } else {
        echo 'Erro ao buscar dados da API';
    }
?>