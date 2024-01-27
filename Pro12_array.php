<?php
    //in PHP array() is used to create the array 
    /*types of array{
        1:index array ex.[1,2,3,4,5,6,6]
        2:associative array ex.["name"=>"viraj"]
        3:multidimensional array ex.[[1,2,3,4],[6,7,8,9]]
    }
    */
     
    //index array 
    $index_arry = array("code1","code2","code3","code4"); 
    print_r($index_arry);
    echo "<br>";
    //2nd method 
    echo $index_arry[3];
    echo "<br>","<br>";



    //associative array 
    $associative_array = array(
        'name' => "viraj", 
        "language" => "PHP", 
        "tital" => "array"
    );
    $associative_array["new_name"] = "Viraj_"; // insert value into array
    print_r($associative_array["name"]); // print only 1 value using key
    echo "<br>";
    print_r($associative_array); // print all values
    echo "<br>","<br>";



    //multidimensional array  
    $multidimensional_array = array(
        "name" => "abc", 
        "contact" => array( 
            123456,12345
        ), 
        "lang" => "HTML", 
        "code" => array(
            "HTML","CSS","JS","NODE_JS"
        )

    );
    print "<pre>";
    print_r($multidimensional_array);
    echo "<br>","<br>";
 

    // 2nd method to create array wthout array function
    $array_method2 = [4,5,6,7,8,
    "name" =>["abc","xyz"]
    ];  
    print_r($array_method2);
?>