<?php
    $first_name = htmlspecialchars(filter_input(INPUT_POST,'first_name'));
    $last_name = htmlspecialchars(filter_input(INPUT_POST, 'last_name'));
    // htmlspecialchars protects variables to display but not run
    // &(whatever abbreviation here) in page source tells to display symbols without using them to run
    // without this, someone manipulating your page with JavaScript is a massive security risk!
    
    // (filter_input(SOURCE, handles if variable doesn't exist
    
    $integer = 19;
    $double = 7.7;
    $string = "Toma";
    $boolean = true;
    
    //increment
    $integer++;
    
    //decrement
    $integer--;
    
    // adding
    $integer+= 10;
    
    //subtracting
    $integer-= 10;
    
    //catenate (add stuff)
    $string .= " the Ghost";
  
    $output = "";
    $counter = 1;
        while ($counter < 10) {
            $output .=  "</br> $counter";
            $counter++;
        }
        // it's better if you do these statements up here with varaibles
        // instead of with a bunch of echos. Output is catenated with counter
        // and then output is simply echoed below
        
        // FOr ( when This is This; If This Happens; Do This )
        for ($index = 0; $index < 10; $index++) {
             $output .=  "</br> $index";
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include ('nav.php'); 
        
        // adds in navigator, is like a method where it can be easily transfered
        // you can put "require" instead of "include" if you need it
        ?>
        <?php
        echo "Hi " . $first_name . " " . $last_name;
        echo "Hi I am $string and I am $integer years old";
        echo "7 / 2 is " . (7 / 2);
        // you actually get doubles in PHP when doing division!
        
        /* <form introduces form, action=what file reads it
         * method="post" for second one bc it's posting data, not getting
         * must change $_ to get or post
         * 
         * String interpolation: You can insert variables into quotes and they 
         * will be included as strings.
         */
        
        if ( $string == "Toma") {
            echo "Yo Toma";
        } else {
            echo "Who are you";
        }
        
        // === instead of == makes it same type as well as same text
        if ( $string === 10) {
            echo "Weird name";
        } else {
            echo "Ok";
        }
  
        echo $output;
        ?>
       
    </body>
</html>
