<?php

function list_stocks() {
    
    global $database;
    // calls function to get list of stocks
    
    // R of CRUD, reading/SELECT data and uses <table> below

$query = 'SELECT symbol, name, current_price, id FROM stocks';
// to do CRUD operations - don't use *

$statement = $database->prepare($query);
// prepares query by using database object

$statement->execute();
// runs query

$stocks = $statement->fetchAll();
// gets result - single row or fetch all? Risky with huge data

$statement->closeCursor();
// tells database to close up for now

return $stocks;
}

function insert_stock($symbol, $name, $current_price) {
    
        global $database;
        /* don't plug values into query - SQL injection risk
    $query = "INSERT INTO `stocks` (`symbol`, `name`, `current_price`) "
            . "VALUES ($symbol, $name, $current_price)";
     * Use substitions insted:
     */
    $query = "INSERT INTO `stocks` (`symbol`, `name`, `current_price`) "
            . "VALUES (:symbol, :name, :current_price)";
    
    // value binding protects against SQL injections
    $statement = $database->prepare($query);
    $statement->bindValue(":symbol", $symbol);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":current_price", $current_price);
    // takes $symbol and plugs it in above to :symbol
    
    $statement->execute();
    $statement->closeCursor();
    
}

function update_stock($symbol, $name, $current_price) {
    
        global $database;
    $query = "update stocks set name = :name, current_price=  :current_price "
            . "where symbol = :symbol";
    
    // value binding protects against SQL injections
    $statement = $database->prepare($query);
    $statement->bindValue(":symbol", $symbol);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":current_price", $current_price);
    // takes $symbol and plugs it in above to :symbol
    
    $statement->execute();
    $statement->closeCursor();
}

function delete_stock($symbol) {
    
        global $database;
     $query = "delete from stocks "
            . "where symbol = :symbol";
    
    // value binding protects against SQL injections
    $statement = $database->prepare($query);
    $statement->bindValue(":symbol", $symbol);
    // takes $symbol and plugs it in above to :symbol
    
    $statement->execute();
    $statement->closeCursor();
}