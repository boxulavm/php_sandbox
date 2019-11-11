<?php

    #VARIABLES

    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, number and underscores
        - Case sensitive
    */

    #DATA TYPES

    /*

        String
        Integers
        floats
        Booleans
        Arrays
        Objects
        NULL
        Resource

    */


    $output = 'Hello World';

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .' '. $string2 . '!';
    $greeting2 = "$string1 $string2";

    $string3 = 'They\'re Here';

    $float1 = 3.14;
    $bool1 = true;

    // Constants
    define('GREETING', 'Hello Everyone');

    echo GREETING;
?>