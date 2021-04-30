<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {
    DEFINE("BASE_URL", "http://www.sysazul.com.br/");
    $config["dbname"] = "contazul";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
} else {
    //servidor

    $config["dbname"] = "contazul";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
}

try {

    global $pdo;
    $pdo = new PDO(
        "mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'],
        $config['dbuser'],
        $config['dbpass']

    );
} catch (PDOexception $x) {
    echo "Falha na conexão com banco " . $x->getMessage();
    exit;
}
