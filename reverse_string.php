<?php
// function to reverse a string

function reverseString($str) {
  $newStr = strrev($str);
  return $newStr;

}

print reverseString("dog");

?>
