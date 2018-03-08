<?php
$firstName=$_GET['firstname'];
$lastName=$_GET['lastname'];
print_r($POST);
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="index.php">
            First Name:<input type="text" name="firstname">
            Last Name:<input type="text" name="lastname">
            <input type="Submit">
        </form>
        
        <?php
            if(isset($firstName) && isset($lastName)){
                echo "Welcome $firstName $lastName! </br>";
            }
        ?>
    </body>
</html>