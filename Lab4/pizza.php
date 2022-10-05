<?php

try {

    $action = htmlspecialchars(filter_input(INPUT_POST, "action"));

    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);

    $pizza_size = filter_input(INPUT_POST, 'pizza_size');

    $toppings = filter_input(INPUT_POST, 'toppings', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

    if ($action == "pizza_size" || "toppings") {
        if ($pizza_size == "large") {
            $price = 9;
            echo "Size: Large<br><br>";
            if ($toppings != NULL) {
                echo "Toppings:<br>";
                foreach ($toppings as $key => $value) {
                    $price = $price + 1.5;
                    echo "$value<br>";
                }
            }
        } else if ($pizza_size == "medium") {
            $price = 7;
            echo "Size: Medium<br><br>";
            if ($toppings != NULL) {
                echo "Toppings:<br>";
                foreach ($toppings as $key => $value) {
                    $price = $price + 1;
                    echo "$value<br>";
                }
            }
        } else if ($pizza_size == "small") {
            $price = 5;
            echo "Size: Small<br><br>";
            if ($toppings != NULL) {
                echo "Toppings:<br>";
                foreach ($toppings as $key => $value) {
                    $price = $price + 0.5;
                    echo "$value<br>";
                }
            }
        }
        echo "<br>Total Cost: $$price";
    } else if ($action != "") {
        $error_message = "Missing pizza info.";
        include('views/error.php');
    }
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include('views/error.php');
}

insert_stock($pizza_size);

function insert_stock($pizza_size) {
    return $pizza_size;
}
