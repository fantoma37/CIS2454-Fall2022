<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    </br>
    <body>
        <h2>Choose Your Pizza Size!</h2>
         <form action="pizza.php" method="post"> 
            <input type="hidden" name='action' value='pizza_size'/>
            <input type="radio" name="pizza_size" value="small" checked>Small</br>
            <input type="radio" name="pizza_size" value="medium">Medium</br>
            <input type="radio" name="pizza_size" value="large">Large</br>
            <br>
        <h2>Choose Your Pizza Toppings!</h2>
         <form action="pizza.php" method="post"> 
            <input type="hidden" name='action' value='toppings'/>
            <input type="checkbox" name="toppings[]" value="Pepperoni">Pepperoni<br>
            <input type="checkbox" name="toppings[]" value="Ham">Ham<br>
            <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="Peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="Olives">Olives<br>
            <input type="checkbox" name="toppings[]" value="Pineapple">Pineapple<br>
            <br>
            <input type="submit" value="Submit"/> 
        </form>
    </body>
    </br>
</html>