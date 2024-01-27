<?php
     $number1 = 3; 
     $number2 = 22;
     $number3 = 8;
    if($number1 > $number2){
        if($number2 > $number3){
            echo($number1);
        }
        else{
            echo($number3);
        }
    }
    else{
        if($number2 > $number3){
            echo($number2);
        }
        else{
            echo($number3);
        }
    }
?>