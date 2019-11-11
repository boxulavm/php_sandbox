<?php

    # FUNCTION - Block of code that can be repeadetly called

    /*

        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()

    */

    // // Create Simple Function
    // function simpleFunction(){
    //     echo 'Hello World';
    // }

    // // Invoke Function
    // simpleFunction();


    function sayHello($name = 'User'){
        echo "Hello $name ! <br>";
    }

    // sayHello('Joe');

    // $BVM = 'BVM';
    // sayHello($BVM);

    // sayHello();


    //  Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // echo addNumbers(2, 2);


    // By Reference
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value : $myNum<br>";


    addTen($myNum);
    echo "Value: $myNum<br>";

?>