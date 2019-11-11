<?php

    #substr()
    #returns a portion of a string

    // $output = substr('Hello', 0, 4);
    // $output = substr('Hellou', 0, -1);

    // echo $output;


    # strlen()

    #returns the length of a string

    // $output = strlen('Hello World!');
    // echo($output);


    #strpos()
    # Finds the position of the first occurence of a sub string

    // $output = strpos('Hello World', 'o');

    // echo $output;



    #strrpos()
    # Finds the position of the last occurence of a sub string

    // $output = strrpos('Hello World', 'o');
    // echo $output;


    # trim()
    # Strips whitespace

    // $text = 'Hello World                ';
    // var_dump($text);

    // $trimed = trim($text);
    // var_dump($trimed);



    #strtoupper
    # Makes everything uppercase

    // $output = strtoupper('hello world!');
    // echo($output);


    # strtolower
    #makes everything lowercase
    // $output = strtolower('hEllo wOrld!');
    // echo($output);



    # ucwords()
    # Capitalize every word

    // $output = ucwords('hello world!');
    // echo($output);



    #str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo($output);



    # is_string()
    # Check if string

    // $val = "22";
    // $output = is_string($val);
    // echo($output);


    // $values = array(true, false, null, 'abc', 33, '33', 'Hello', '', ' ', 0, '0');

    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "$value is a string <br>";
    //     }
    // }




    # gzcompress
    # Compress a string

    // $string = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias voluptatum corporis excepturi,
    //             modi asperiores possimus nostrum facere, consequuntur eaque exercitationem porro, repellat perspiciatis molestias.
    //          Est dicta autem perferendis quia quibusdam.";

    // $compressed = gzcompress($string);
    // echo($compressed);


    // $original = gzuncompress($compressed);
    // echo($original);