<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    if (!isset($_POST['country'])) {
        echo 'Faça uma busca por país.';        
    } else {
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
        
            foreach ($data as $key => $state) {
                echo '<div class="states">';
                echo '<p>' . $state->ProvinciaEstado . '</p>';
                $calc_cases = ($state->Confirmados / $sum_cases) * 500;
                $calc_deaths = ($state->Mortos / $sum_cases) * 500;
                // make div with width calc_cases and calc_deaths %
                echo '<div>';
                    echo '<div class="data-bar">';
                        echo '<div class="bar" style="width: ' . $calc_cases . '%; background-color: #f00; height:20px">&nbsp</div>';
                        echo '<p>' . number_format($state->Confirmados, 0, ',', '.') . ' casos</p>';
                    echo '</div>';
                    echo '<div class="data-bar">';
                        echo '<div class="bar" style="width: ' . $calc_deaths . '%; background-color: #000; height:20px">&nbsp</div>';
                        echo '<p>' . number_format($state->Mortos, 0, ',', '.') . ' mortes</p>';
                    echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        
        $server = $_ENV['DB_HOST'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];
    
        $conn = new mysqli($server, $user, $pass, 'kidopi');
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO acessos (pais, data) VALUES ('$country', NOW())";
    
        try {
            $conn->query($sql);
        } catch (Exception $e) {
            echo "Error inserting data: " . $conn->error;
        }
    }
?>