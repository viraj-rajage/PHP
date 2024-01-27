<?php

    //print number withot using loop
    function num_print($num){
        if($num <= 100){
            print "$num"."<br>"; 
            $num++; 
            num_print($num);
        }
        else{
            return 0;
        }
    }
    num_print(91);
?>