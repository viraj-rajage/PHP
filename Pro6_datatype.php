<?php
    /*
    1:string ex. "hello world", "hello php"
    2:integer ex. 1,2,3,4,5... etc
    3:float ex. 2.3,2.4... etc 
    4:boolean true and false 
    5:array ex. ar[1,2,3,4]
    6:null     
    */
    
    //string 
    $string = "hello world"; 
    echo$string,"</br>";
    var_dump($string); // var_dump() is used to find the the datatype of variable
    print"<br>";

    //integer
    $integer= 123; 
    echo$integer,"</br>";
    var_dump($integer);  
    print"<br>";

    //float
    $float= 123.45; 
    echo$float,"</br>";
    var_dump($float);  
    print"<br>";

    //boolean
    $boolean= true;  
    echo$boolean,"</br>";
    var_dump($boolean);  
    print"<br>";

    //array 
    $num = array(1,2,3,4,5,6,7,8,9,0); 
    echo $num[3],$num[0],$num[7];
    echo"<br>";
    var_dump($num);
    echo"<br>";

    //null 
    $blanck_value = null; 
    echo $blanck_value;
    echo"<br>";
    var_dump($blanck_value);
    echo"<br>";




?>