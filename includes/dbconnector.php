<?php
    function getDBConnection() {

        try {
            $connection = new PDO("mysql:host=localhost;dbname=polylib", 'root', '');

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connection;
        } catch (PDOException $e) {
            return NULL;
        }
    }
?>
