<?php

  //PHP Arrays
  echo 'First Array';
  $firstArray = array("pizza", "Chocolate", "Coffee");

  print_r($firstArray);
  echo '<br />';
  echo $firstArray[2];
  echo '<br /><br />';

  echo 'Second Array';
  $secondArray[0] = "Pizza";
  $secondArray[1] = "Beer";

  print_r($secondArray);
  echo '<br />';
  echo $secondArray[1];
  echo '<br /><br />';


  echo 'Third Array';
  $thirdArray = array(
    "France" => "French",
    "USA" => "English",
    "Germany" => "German"
  );

  print_r($thirdArray);
  echo '<br />';
  echo $thirdArray[USA];
  echo '<br /><br />';


  echo 'Appending to the Second Array';
  $secondArray[]="Salad";
  echo '<br />';
  print_r($secondArray);


  echo '<br /><br />';
  echo 'Remove a value from the Third Array';
  unset ($thirdArray["Germany"]);
  echo '<br />';
  print_r($thirdArray);
  echo '<br /><br />';

  //Unset can be used for any variable or array
  $name = "Bob";
  //unset($name);
  print_r($name);

?>
