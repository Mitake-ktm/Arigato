<?php
function connectToDbAndGetPdo() 
{
    $dbname = 'arigato';
    $host = 'localhost';

    $dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
    $user = 'root';
    $pass = 'root';

    $driver_options = 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    try {
            $pdo = new PDO($dsn, $user, $pass, $driver_options);
            return $pdo;
        } 

        catch (PDOException $e) 
        {
            echo 'La connexion à la base de données a échouée.';
        }
}

$pdo = connectToDbAndGetPdo();
?>
