<?php
    $first_name = htmlspecialchars(filter_input(INPUT_GET,'first_name'));
    $last_name = htmlspecialchars(filter_input(INPUT_GET,'last_name'));
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
        /* HTML AND PHP FILES
         * HTML files are static pages
         PHP files need to process and do code blocks first, meaning it is a static page
         Take index file in HTML (doesn't have to be, can be PHP file without 
         doing any PHP codeblocks), send to PHP, does something with it, gives back results
         "view page source" online returns HTML code */
        
        /* NEW LANGUAGE
         * </br> is a line break
         * </form> ends form
         &nbsp just spaces things out
         * 
         GETS AND POSTS
         * sending data: gets and posts
         line 1 below is a get method - they are usually for non-changing operations
         Can send multiple times - will show up in the URL and separate with ampersand
         * Can also change from URL
         * Start page with PHP code - look at code
         * Rest will be HTML and echoing things
         * $_GET[''] is how you get values to PHP, as variables to get data out of
         * ^look at how you can use $ as variables when you echo
         * . are equal to + in PHP
         * "Snake casing" using lowercase but separating with underscore (look up top)
         * 
         * F12 then turn dev tools on then network tab tracks network requests 
        */
        
        ?>
   
          <form action="index.php" method="get"> 
            <label>First name: </label> 
            <input type="text" name="first_name"/><br> 
            <label>Last name: </label> 
            <input type="text" name="last_name"/><br> 
            <label>&nbsp;</label>
            <input type="submit" value="Submit"/> 
        </form>
        
        <form action="view.php" method="post"> 
            <label>First name: </label> 
            <input type="text" name="first_name"/><br> 
            <label>Last name: </label> 
            <input type="text" name="last_name"/><br> 
            <label>&nbsp;</label>
            <input type="submit" value="Submit"/> 
        </form>
       
    </body>
</html>
