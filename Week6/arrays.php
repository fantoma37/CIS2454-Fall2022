<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //0,  1,   2,   3,  4 - indexes
        $scores = array(95, 97, 100, 82, 100);

        // adds a new value (index 5, cont.)
        $scores[] = 78;

        $scores[10] = 92;

        // prints the array, not in a pretty way
        print_r($scores);
        
        // takes you to the end of the scores
        end($scores);
        
        // recieves current key - how you're able to skip over indexes
        // matching types - take a key (index) and associate value with it
        $last_index = key($scores);

        // prettier way to print the array
        for ($index = 0; $index <= $last_index; $index++) {
            if (isset($scores[$index])) {
                echo "$index : $scores[$index] </br>";
            }
        }
        
        // you don't need the indexes, just if you want to show them
        foreach ($scores as $score){
            echo "</br>$score";
        }
        
        // how to give strings for indexes (instead of 0, 1, 2, 3...)
        // keys are names, scores are associated values (key => value)
        // keys must be unique
        $names_and_scores = array('Eric' => 100, 'Jeb' => 95, 'Journey' => 75);
        $names_and_scores[] = 23;
        
        // prints names and scores
        print_r($names_and_scores);
        
        // searches for the value (100) assocaited with the key (Eric)
        if ( $names_and_scores['Eric'] > 94 ){
            echo "Eric gets an A";
        }
        
        // how to add or update
        $names_and_scores['Vivi'] = 94;
        
        $names_and_scores['Jeb'] = 99;
        
        print_r($names_and_scores);
        
        // goes through the scores and prints each
        // doesn't need keys ($name), only if you want to show them
        foreach ($names_and_scores as $name => $score){
            echo "</br>$name has a score of: $score";
        }
        
        ?>
    </body>
</html>