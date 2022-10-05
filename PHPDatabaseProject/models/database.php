<?php

$data_source_name = 'mysql:host=localhost;dbname=stock';
        //  database server type, location, database name
$username = 'stockuser';
$password = 'test';
        // don't put usernames and passwords in source code

$database = new PDO($data_source_name, $username, $password);