<?php
define("ln","<br>");
    function age($age){
        if($age>=18){
            print "able to vote";
        }
        else{
            print "note able to vote";
        }
    }
    age(54);
    print ln;
    age(3); 
    print ln;
    age(90);
?>