<?php 
    //echo date('d'); //Day
    //echo date('m'); // Month
   // echo date('Y'); // Year
    //echo date('l');   // Day of week
    //echo date('Y/m/d');

    //echo date('h'); //Hour 
    //echo date('i'); //Min
    //echo date('s'); //Seconds
    //echo date('a'); //Am or Pm

    //Set time zone
    // date_default_timezone_set('America/Los_Angeles');
    // echo date('h:i:sa');

    $timestamp = mktime(11,30,22,11,18,1993);
    // echo $timestamp;
    // echo date('m/d/Y', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2017');
    // echo $timestamp2;
    $timestamp3 = strtotime('tomorrow');
    echo date('m/d/Y', $timestamp3);
?>