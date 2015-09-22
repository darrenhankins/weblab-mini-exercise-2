<?php

// reverse a string
function reverseString($str) {
  $newStr = strrev($str);
  return $newStr;

}

// checks if a string is all lower case
function isStringLowerCase($str){
  if (ctype_lower($str)) {
    return true;
  } else {
    return false;
  }
}



 ?>
