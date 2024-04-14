<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $server = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];

    // Cria a conexão
    $conn = new mysqli($server, $user, $pass);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Cria o banco de dados
    $sql = "CREATE DATABASE kidopi";

    try {
        $conn->query($sql);
        echo "Database created successfully";
    } catch (Exception $e) {
        echo "Error creating database: " . $conn->error;
    }

    // Cria tabela
    $sql = "CREATE TABLE kidopi.acessos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        pais VARCHAR(30) NOT NULL,
        data DATETIME NOT NULL
    )";

    try {
        $conn->query($sql);
        echo "Table created successfully";
    } catch (Exception $e) {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>