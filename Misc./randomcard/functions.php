<?php

    function displaySymbol($randomValue,$pos)
    {
        switch ($randomValue) 
        {
            case 0:
                 $symbol = "ten";
                 break;
            case 1:
                $symbol = "king";
                break;
            case 2:
                $symbol = "queen";
                break;
            case 3:
                $symbol = "jack";
                break;
            case 4:
                $symbol = "ace";
                break;
                
        }
        echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt= '$symbol' title = '". ucfirst($symbol). "' width = '70' >";
    }
    function randShape($randShape)
    {
        switch($randShape)
        {
            case 0:
                $shapeType = "hearts";
                break;
            case 1:
                $shapeType = "diamonds";
                break;
            case 2:
                $shapeType = "spades";
                break;
            case 3:
                $shapeType = "clubs";
                break;
        }
    }
    function displaySymbol($randomValue1, $randomValue2, $randomValue3)
    {
        echo "<div id = 'output'>";
        
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
        {
            switch($randomValue1)
            {
                case 0: $totalPoints = 6;
                        break;
                case 1: $totalPoints = 7;
                        break;
                case 2: $totalPoints = 8;
                        break;
                case 3: $totalPoints = 9;
                        break;
                case 4: $totalPoints = 10;
                        break;
            }
            echo "<h2> You won $totalPoints points! </h2>";
        }
        else
        {
            echo "<h3> Try Again! </h3>";
        }
        echo "</div>";
    }
    function chooseCard()
    {
        for($i = 1; $i < 3; $i++)
        {
            ${"randomValue" . $i} = rand(0,3);
            displaySymbol(${"randomValue". $i},$i);
        }
        displaySymbol($randomValue1, $randomValue2, $randomValue3, $randomValue4);
    }
?>