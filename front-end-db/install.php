<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $connection = new PDO($dsn, $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Table created successfully.";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
