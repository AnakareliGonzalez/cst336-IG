<?php
$numOfPwd=$_GET['numOfPwd'];
$pwdLength=$_GET['pwdLength'];
$letterExc=$_GET['letterExc'];
print_r($_POST);
?>

<!DOCTYPE html>
<html>
    <title>Custom Password Generator</title>
    
    <body>
        
        <form>
            action="index.php">
            Number of passwords:<input type="text" name="numOfPwd">
             <input type="Submit">
            Password Length:<input type="text" name="pwdLength">
            //rand
             <input type="Submit">
            Letter to Exclude:<input type ="text" name="letterExc">
            <input type="Submit">
        </form>
        
        <?php
        
        // global $pwd
        // $pwd.length =
        //random generator
        $pwd = 
        $pwdArr = array();
        for($i = 0; $i < strlen($pwd); $i++){
            
         array_push(&array: $pwdArr, $pwd[$i]);
}

        $num = rand(0, 25);
        echo $pwd[$num];
        echo $pwdArr[$num];
        
        //pwd arguments
        function getPwd(){
        if(empty($_POST['numOfPWd']))
            echo "Number of passwords not entered";
        }
        else{
            "Number of Passwords: . $_POST['numOfPwd']";
        }
        if(empty($_POST['pwdLength'])){
            echo "Length of password not entered"
        }
        else{
            echo "Length of Passwords: . $_POST['pwdLength']";
        }
        if(empty($_POST['lettersExc'])){
            echo "Desired letters excluded not entered";
        }
        else{
            "Letters excluded"
        }
        
        
        
        function out(){
            for($i = 0; i<numOfPwd; i++){
                ($pwd . $i)
            }
        }
    </body>
 
</html>