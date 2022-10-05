<?php

/* under <table>, this is R is CRUD - reading/SELECT data
th = table header
 * td = table data
 * tr = table row
 */

try {
require_once 'models/database.php';
// load file and access different things once

require_once 'models/stock.php';

$action = htmlspecialchars(filter_input(INPUT_POST, "action"));
// uses action insert in post methods to identify if creating or updating

// C of CRUD, Create/INSERT starting here and uses post method below
$symbol = htmlspecialchars(filter_input(INPUT_POST, "symbol"));
$name = htmlspecialchars(filter_input(INPUT_POST, "name"));
$current_price = filter_input(INPUT_POST, "current_price", FILTER_VALIDATE_FLOAT);

if ($action == "insert_or_update" && $symbol != "" && $name != "" && $current_price != 0) {
    $insert_or_udpdate = filter_input(INPUT_POST, 'insert_or_update');
    if ($insert_or_udpdate == "insert") {
        insert_stock($symbol, $name, $current_price);
    } else if ($insert_or_udpdate == "update") {
        update_stock($symbol, $name, $current_price);
    }
    header("Location: stocks.php");
    // U of CRUD, UPDATE uses other post method below
} else if ($action == "delete" && $symbol != "") {
    delete_stock($symbol);
    header("Location: stocks.php");
} else if ($action != "") {
    // if there is an action and neither work, must be missing data
    $error_message = "Missing symbol, name, or current price";
        include('views/error.php');
}

$stocks = list_stocks();

include('views/stocks.php');

} catch (Exception $e){
    $error_message = $e->getMessage();
    include('views/error.php');
    // read error.php and jam it in here
}

?>


