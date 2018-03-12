<?php
$name=$_GET['name'];
$date=$_GET['date'];
$address=$_GET['address'];
$location=$_GET['location'];
$type=$_GET['type'];
$color=$_GET['color'];
echo "Thank you for choosing us ". $name . ". Your $color $type will await you at $location.</br>";

print_r($POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Maserati Purchase</title>
        
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
        <link href="<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">"
    </head>
    <body>
        <header>
            <h1 <img src="https://seeklogo.com/images/M/maserati-logo-5B0848222D-seeklogo.com.png"></img></h1>
        </header>
        
        <form action="index.php">
            
            <div>
                <label for="name">Name</label>
                <input type="text" id= "name" name="name">
            </div>
            
            <div>
                <label for="date">Date</label>
                <input type="text" id= "date" name="date">
            </div>
            
            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            
            <br>
            <label for="location">Choose a California location</label>
            <select id="location" name="location">
            <option value="">-SELECT ONE-</option>
            <option value="1">Monterey</option>
            <option value="2">Newport Beach</option>
            <option value="3">Stevens Creek</option>
            <option value="4">Walnut Creek</option>
            <option value="5">Marin</option>
            <option value="6">Rancho Mirage</option>
            <option value="7">San Diego</option>
            <option value="8">Woodland Hills</option>
            <option value="9">Westlake</option>
            <option value="10">Bakersfield</option>
            <option value="11">Anaheim Hills</option>
            </select>
            <br/>
            
            <br>
            <label for="type">Choose Maserati Type</label>
            <select id="type" name="type">
            <option value="">-SELECT ONE-</option>
            <option value="1">Ghibli</option>
            <option value="2">Levante</option>
            <option value="3">Gran Turismo</option>
            <option value="4">Quattroporte</option>
            </select>
            <br/>
            
            <fieldset>
            <legend>Color</legend>
            <input id="black" type="radio" name="color" value="black">
            <label for="black">Black</label><br>
            <input id="white" type="radio" name="color" value="white">
            <label for="white">White</label><br>
            <input id="gray" type="radio" name="color" value="gray">
            <label for="gray">Gray</label>
            </fieldset>
            
            <input type="Submit">
        </form>
        
        <!--<?php-->
        <!--{-->
        <!--    if($type == "1"){-->
        <!--        echo 'img src="/cst336-IG/Hw3/img/ghibli.jpg"/>';-->
        <!--    }-->
        <!--    else if($type = "2"){-->
        <!--        echo 'img src="/cst336-IG/Hw3/img/levante.jpg"/>';-->
        <!--    }-->
        <!--    else if($type == "3"){-->
        <!--        echo 'img src="/cst336-IG/Hw3/img/granturismo.jpg"/>';-->
        <!--    }-->
        <!--    else if($type == "4"){-->
        <!--        echo 'img src="/cst336-IG/Hw3/img/quattro.jpg"/>';-->
        <!--    }-->
        <!--}-->
        <!--?>-->
    </body>
</html>