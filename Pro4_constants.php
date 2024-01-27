<?php
    // in your page your need to use same content eg. link then you can use constant for time saving 
    /*
    syntax:- define(name,value);
    */
     define("studydoc","https://viraj-rajage.netlify.app"); 
     define("studydocs",17);
     echo studydoc,studydocs;
     // 2nd method (3rd parameter case-insensitive)
     // syntax:- define(name,value,true or false); 
     define("project","https://studydocs.netlify.app",false); 
     echo project;
?>