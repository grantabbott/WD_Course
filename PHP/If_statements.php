<?php

  //If statement #1
  $number = 1;
  $secondNumber = 2;
  $thirdNumber = 3;

  if ($number == 1){
    print "True";
  } else {
    print "False";
  }
  print "<br />";
  if ($number == $secondNumber){
    print "True";
  } else {
    print "False";
  }

  print "<br />";
  //Printing not equal
  if (!($number == $secondNumber)){
    print "True";
  } else {
    print "False";
  }

  print "<br />";
  if (!($number == $secondNumber) AND $number != $thirdNumber){
    print "True - Both are not equal";
  } else {
    print "False";
  }


  print "<br />";
  if (!($number == $secondNumber) OR $number == $thirdNumber){
    print "True";
  } else {
    print "False";
  }



?>
