<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // if there is no name, default to NULL
            function list_users($name = NULL){
                // if the name is not NULL, return name
                if (isset($name)){
                    return array($name);
                }
                // if the name is NULL, return this array
                else {
                    return array("Eric", "Jeb", "Vivi");
                }
            }
            
            // print Bob from the list_users array
            print_r(list_users("Bob"));
            
            print_r(list_users());
        ?>
    </body>
</html>