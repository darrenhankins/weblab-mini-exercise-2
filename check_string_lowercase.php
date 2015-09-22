<?php
// Write a function that checks if a string is all lower case

function isStringLowerCase($str){

  if (ctype_lower($str)) {
    $newStr = "The string ".$str." is all lowercase.";

  } else {
    $newStr = "The string ".$str." is NOT all lowercase.";

  }

  return $newStr;

}

print isStringLowerCase("dAd");

 ?>
