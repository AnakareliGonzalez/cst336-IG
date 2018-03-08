<?php
    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <?php
        
        if(isset($_POST['clear-counter'])){
            echo "destroying session...<br>";
            session_destroy();
            session_start();
        }
        
        //Read our session variable 'loadCounter'
        if(isset($_SESSION['loadCounter'])){
        //if it's not set, then set it to 1
            $_SESSION['loadCounter'] = 1;
        }
        else {
        //if it is set, increment the counter
            $_SESSION['loadCounter'] += 1;
        }
    
        //print out the value of counter
        echo "Page loads: " . $_SESSION['loadCounter'] . "<br/>";
        
        //make form. should have submit button
        //in php, check if the form is submitted. if so, then call session_destroy
        
        // echo "Printing out GET: <br/>";
        // print_r($_GET);
        
        
        ?>
        
        <form action="index.php">
            <input type="submit" name="clear-counter" value="Clear">
        </form>
    </body>
</html>