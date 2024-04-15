<?php

    // pega os valores totais de casos e mortes do país escolhido
    if (isset($_POST['country'])) {
        $country = $_POST['country'];

        if ($country !== null) {
            $apiUrl = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . $country;
            $response = file_get_contents($apiUrl);
            $data = json_decode($response);

            $sum_cases = 0;
            $sum_deaths = 0;

            foreach ($data as $key => $state) {
                $sum_cases += $state->Confirmados;
                $sum_deaths += $state->Mortos;
            }

            echo '<p>Total de casos: ' . number_format($sum_cases, 0, ',', '.') . '</p>';
            echo '<p>Total de mortes: ' . number_format($sum_deaths, 0, ',', '.') . '</p>';
        }
    }
?>
