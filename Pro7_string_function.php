<?php
    define("ln","<br>");
    // string function

    // strlen() --> for fine the lenght of string including space  
    $string_name= "PHP Programming"; 
    print strlen($string_name);
    print ln;
   
    // str_word_count() --> for find the number of words in string 
    print str_word_count($string_name);
    print ln; 

    // strrev() --> for reverse the string 
    print strrev($string_name); 
    print ln; 

    // strpos() --> Find the position of the first occurrence of a substring in a string
    echo strpos($string_name ,"i"); 
    print ln; 
     
    // str_replace() --> Replace all occurrences of the search string with the replacement string
    echo str_replace($string_name,"viraj",$string_name);
    echo str_replace("PHP"," web",$string_name);
    print ln; 

    // str_split() Convert a string to an array
    $arry=[1,2,4,5,6,6,7,7,7]; 
    print_r(str_split($string_name));
    print ln; 
    




?>