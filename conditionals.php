<?php

    #CONDITIONALS

    /*

        ==
        ===
        <
        >
        <=
        =>
        !=
        !==

    */


    // $num = 6;

    // if($num == 5){
    //     echo '5 passed!';
    // } elseif($num == 6) {
    //     echo '6 passed';
    // } else {
    //     echo 'did not pass!';
    // }



    # NESTING IF

    $num = 5;
    
    // if($num > 4){
    //     if($num < 10){
    //         echo "$num passed";
    //     }
    // }

    /*

        LOGICAL OPERATOR

        and &&
        or ||
        XOR

    */

    // if($num > 4 && $num < 10){
    //     echo "$num passed";
    // } else {
    //     echo "$num shall not passed!";
    // }

    // if($num > 4 XOR $num > 10){
    //     echo "$num passed";
    // } else {
    //     echo "$num shall not passed!";
    // }

    
    # SWITCH

    $favColor = 'red';


    switch($favColor){
        case 'red':
            echo 'Your favourite color is red';
            break;
        case 'blue':
            echo 'Your favourite color is blue';
            break;
        case 'green':
            echo 'Your favourite color is green';
            break;
        default:
            echo 'Your favourite color is something else';
    }

?>