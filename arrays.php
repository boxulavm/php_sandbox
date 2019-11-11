<?php

    #Array = Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Kevin', 'Floskula', 'Jimmy');
    $ids = array(12, 32, 44, 123);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    // echo count($cars);
    // print_r($cars)
    // var_dump($cars)

    // echo $people[2];
    // echo $cars[4];



    // Associative arrays

    $people = array('Brad' => 35, 'BVM' => 32, 'Jose' => 32);

    $ids = [ 22 => 'Arya', 44 => 'Jon', 55 => 'Deniro'];

    // echo $people['Brad'];

    // echo $ids[22];

    $people['Jill'] = 42;

    // echo $people['Jill'];

    // print_r($people)

    // var_dump($people);



    // Multi-Dimensional
    $cars = array(
        array('Honda', 22, 10),
        array('Toyota', 32, 30),
        array('Ford', 42, 40),
    );

    echo $cars[1][2];

?>   