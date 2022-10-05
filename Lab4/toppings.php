<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    </br>
    <body>
        <h2>Choose Your Pizza Toppings!</h2>
         <form action="pizza.php" method="post"> 
            <input type="hidden" name='action' value='toppings'/>
            <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br>
            <input type="checkbox" name="toppings[]" value="ham">Ham<br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br>
            <input type="checkbox" name="toppings[]" value="pineapple">Pineapple<br>
            <br>
            <input type="submit" value="Submit"/> ch
        </form>
    </body>
    </br>
</html>