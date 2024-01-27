<?php
    /* 
    type of operator - 
    -> Arithmetic [+,-,*,/,%,++,--]
    -> Logical [&&,||,!]
    -> Conditional(Ternary) [ ?: ]
    -> Assignment [=,+=,-=,*=,/=,%=]
    -> Comparison [==,!=,>,<,<=,>=]
    */ 

    define("ln","<br>");
    //Arithmetic operator 
    $num1 = 10;
    $num2= 3;
    echo "Add of two number ".$num1 + $num2;
    echo "<br>";
    echo "Sub of two number ".$num1 - $num2;
    echo "<br>";
    echo "Mul of two number ".$num1 * $num2;
    echo "<br>";
    echo "Div of two number ".$num1 / $num2;
    echo "<br>"; 
    echo "Mod of two number ".$num1 % $num2;
    echo "<br>"; 
    echo "Inc of number ".++$num1;
    echo "<br>"; 
    echo "Dec of number ".--$num2;
    echo "<br>"; 
    print ln; 
    //Comparison [==,!=,>,<,<=,>=] 
    $num3 = 10;
    $num4 = 11;
    
    var_dump($num3 == $num4);
    print ln; 

    var_dump($num3 != $num4);
    print ln;
    
    var_dump($num3 > $num4);
    print ln;

    var_dump($num3 < $num4);
    print ln;

    var_dump($num3 >= $num4);
    print ln;

    var_dump($num3 <= $num4);
    print ln;
    print ln;

 
    // Logical [&&,||,!] 

    $num5 = 0; 
    $num6 = 1; 
     
    var_dump($num5 && $num6);  // AND Both Are true
    print ln; 
     
    var_dump($num5 || $num6);  // OR Atleast 1 true
    print ln; 

    var_dump(!$num6);   //print if true then false and if false then true
    echo ln,ln;

    //Conditional(Ternary) [ ?: ] 
    $num7 = 3;  
    $num7 > 4 ? $result = "yes" : $result = "no"; 
    var_dump($result);
    echo ln,ln;
    


    //Assignment [=,+=,-=,*=,/=,%=] 
    $num8 = 9;  
    print $num8;
    print ln; 

    $num8 += $num8; 
    print $num8;
    print ln; 

    $num8 -= $num8; 
    print $num8;
    print ln; 
 

    $num9 = 4; 
    $num9 *= $num9; 
    print $num9; 
    print ln;

    $num9 /= $num9; 
    print $num9;
    print ln; 

    $num9 %= 6; 
    print $num9;
    print ln;
    
?>