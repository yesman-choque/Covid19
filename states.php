<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    if (!isset($_POST['country'])) {
        echo 'Faça uma busca por país.';
        exit;
    }

    $country = $_POST['country'];

    if ($country !== null) {
        $apiUrl = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . $country;
        $response = file_get_contents($apiUrl);
        $data = json_decode($response);
    
        foreach ($data as $key => $state) {
            echo '<p>' . $state->ProvinciaEstado . ' - Casos: ' . $state->Confirmados . ' - Mortes: ' . $state->Mortos . '</p>';
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
?>