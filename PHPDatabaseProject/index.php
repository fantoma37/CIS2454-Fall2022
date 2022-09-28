<?php

/* under <table>, this is R is CRUD - reading/SELECT data
th = table header
 * td = table data
 * tr = table row
 */

$data_source_name = 'mysql:host=localhost;dbname=stock';
        //  database server type, location, database name
$username = 'stockuser';
$password = 'test';
        // don't put usernames and passwords in source code

try {
$database = new PDO($data_source_name, $username, $password);
echo "<p>Database connection successful</p>";

$action = htmlspecialchars(filter_input(INPUT_POST, "action"));
// uses action insert in post methods to identify if creating or updating

// C of CRUD, Create/INSERT starting here and uses post method below
$symbol = htmlspecialchars(filter_input(INPUT_POST, "symbol"));
$name = htmlspecialchars(filter_input(INPUT_POST, "name"));
$current_price = filter_input(INPUT_POST, "current_price", FILTER_VALIDATE_FLOAT);

if ($action == "insert" && $symbol != "" && $name != "" && $current_price != 0) {
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
    
    // U of CRUD, UPDATE uses other post method below
} else if ($action == "update" && $symbol != "" && $name != "" && $current_price != 0) {
     $query = "update stocks set name = :name, current_price=  :current_price"
            . "where symbol = :symbol";
    
    // value binding protects against SQL injections
    $statement = $database->prepare($query);
    $statement->bindValue(":symbol", $symbol);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":current_price", $current_price);
    // takes $symbol and plugs it in above to :symbol
    
    $statement->execute();
    $statement->closeCursor();
} else if ($action != "") {
    // if there is an action and neither work, must be missing data
    echo "<p?Missing symbol, name, or current price</p>";
}


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

} catch (Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message </p>";
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Current Price</th>
                <th>ID</th>
            </tr>
            <?php foreach($stocks as $stock) : ?>
            <tr>
                <td><?php echo $stock['symbol'] ?></td>
                <td><?php echo $stock['name'] ?></td>
                <td><?php echo $stock['current_price'] ?></td>
                <td><?php echo $stock['id'] ?></td>
            </tr>
           <?php endforeach; ?>
        </table>
        <br>
        <h2>Add Stock</h2>
         <form action="index.php" method="post"> 
            <label>Symbol:</label> 
            <input type="text" name="symbol"/><br> 
            <label>Name:</label> 
            <input type="text" name="name"/><br> 
            <label>Current Price:</label> 
            <input type="text" name="current_price"/><br> 
            <input type="hidden" name='action' value='insert'/>
            <label>&nbsp;</label>
            <input type="submit" value="Add Stock"/> 
        </form>
        <br>
        <h2>Update Stock</h2>
         <form action="index.php" method="post"> 
            <label>Symbol:</label> 
            <input type="text" name="symbol"/><br> 
            <label>Name:</label> 
            <input type="text" name="name"/><br> 
            <label>Current Price:</label> 
            <input type="text" name="current_price"/><br> 
            <input type="hidden" name='action' value='update'/>
            <label>&nbsp;</label>
            <input type="submit" value="Update Stock"/> 
        </form>
    </body>
</html>
