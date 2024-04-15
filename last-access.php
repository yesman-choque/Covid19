<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $server = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];

    $conn = new mysqli($server, $user, $pass, 'kidopi');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT data, pais FROM acessos ORDER BY data DESC LIMIT 1";

    try {
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $country = $row['pais'];
        $lastAccess = $row['data'];
        $lastAccessFormatted = date('d/m/Y H:i:s', strtotime($lastAccess));

        echo "<p>Último acesso: " . $lastAccessFormatted . " - País: " . $country . "</p>";

    } catch (Exception $e) {
        echo "Error fetching data: " . $conn->error;
    }

    $conn->close();
?>