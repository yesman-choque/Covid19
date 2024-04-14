<?php
    $data = $_GET['country'];

    if ($data !== null) {
        $apiUrl = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . $data;
        $response = file_get_contents($apiUrl);
        $data = json_decode($response);
    
        foreach ($data as $key => $state) {
            echo '<p>' . $state->ProvinciaEstado . ' - Casos: ' . $state->Confirmados . ' - Mortes: ' . $state->Mortos . '</p>';
        }
    }
?>