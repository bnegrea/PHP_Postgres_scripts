<?php
 $dsn = "pgsql:host=localhost;dbname=database;port=5432";


//dbname= database name
//port= the port number the database is running, usualy 5432 for postgres

//adding options for the connection
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];

//establising connection using a PHP Data Object. database name and password needs to be provided
    $pdo = new PDO($dsn, 'database', 'password', $opt); 
   


?>