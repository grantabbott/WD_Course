<?php


//A foreach loop with an array
print "The PHP foreach loop on an array";
print '<br />';
$array = array("Pizza", "Beer", "Soda", "Wings");
foreach ($array as $key => $value){

  echo "Key: $key Value: $value <br />";
}

print '<br /><br />';
print "The PHP for loop";
print '<br />';
  for($i=1; $i<=5; $i++){
    print $i.'<br />';
  };
/*
  for($i=500; $i>0; $i=$i-5){
    print $i.'<br />';
  };
*/


?>
