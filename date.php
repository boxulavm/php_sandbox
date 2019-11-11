<?php
    // echo date('d'); // day
    // echo date('m'); // Month
    // echo date('Y'); // Year
    // echo date('l'); // Day of the week

    // echo date('Y/m/d');
    // echo date('d/m-Y');

    // echo date('h'); // Hour

    // echo date('i'); // minutes

    // echo date('s'); // seconds
    // echo date('a'); // AM or PM

    //  Set Time Zone
    // date_default_timezone_set('America/New_York');

    // echo date('h:i:sa');

    // The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds that have elapsed since January 1, 1970
    // (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00:00:00Z).

    $timestamp = mktime(19, 14, 54, 9 , 10, 1981);
    // echo $timestamp;
    // echo date('m/d/Y h:i:sa', $timestamp)

    $timestamp2 = strtotime('7:00pm March 22 2013');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 months');

    echo date('m/d/Y', $timestamp5);

?>