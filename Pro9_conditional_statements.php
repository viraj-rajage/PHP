<?php 

    define("ln","<br>");
    $Condition = 15; 

    //if
    // if($Condition >6){
    //     echo "number is gretter than 6";
    //     print ln;
    // }  

    // //if-else 
    // if ($Condition >= 18) {
    //     print "you are able for votiong";
    // } else {
    //     print "you are not able for voting";
    // }

    //if 
   if($Condition ==2){
        echo "number is gretter than 6";
        print ln;
   }
   elseif($Condition == 15){
        echo "number is equal to 15";
        print ln;
   }
   else{
        echo "number is equal to 0";
        print ln;
   }
?>