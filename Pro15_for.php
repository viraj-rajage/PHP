<?php
    define("ln","<br>");
    // for($i = 0 ; $i<=10 ; $i++){
    //    if($i%2 == 1){
    //     print "odd number is $i";
    //    }
    //    print ln;
    // }
    print "=====table====="; 
    print ln;
    $num2 = 4;
    for($num1 = 1 ;$num1<=10 ; $num1++){
        $table = $num1 * $num2; 
        echo  "$num1 x $num2 =".$table; 
        print ln;
    }

    
?>