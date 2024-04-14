<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // get last access date
    $server = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];

    $conn = new mysqli($server, $user, $pass, 'kidopi');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT data FROM acessos ORDER BY data DESC LIMIT 1";

    try {
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $lastAccess = $row['data'];

        echo "<p>Último acesso: " . $lastAccess . "</p>";

    } catch (Exception $e) {
        echo "Error fetching data: " . $conn->error;
    }

    $conn->close();
?>