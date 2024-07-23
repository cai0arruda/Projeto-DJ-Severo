<?php
    $host = 'auth-db1577.hstgr.io';
    $dbname = 'u221263050_severo';
    $username = 'u221263050_root';
    $password = 'Caio2303arruda$';
    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }    