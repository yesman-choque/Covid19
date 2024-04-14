<!-- Return data based on input -->
<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $country = $_POST['country'];

    // save country and datetime in database (kidopi.acessos)
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

    header('Location: index.php?country=' . $country);
    exit;
?>