<?php

// Write a function that turns a unix timestamp into a readable date and time.

function timestampToDateTime($str){

  $newDate = date('m/d/Y',$str);
  return $newDate;

}

$date = new DateTime();
$str = $date -> getTimestamp();

print timestampToDateTime($str);



 ?>
