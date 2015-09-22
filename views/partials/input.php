<?php

if (isset($_POST['string'])) {
  //$str = $_GET['string']; // variables visible in the URL
  $str = $_POST['string'];
  include_once("func.php");

  ?>
  <h3>You just reversed the string: <font size="5" color="red"><? print $str; ?></font></h3>
  <?
  if (isStringLowerCase($str)) {
  ?>
    <h3>Your string is all LOWER case!</h3>
  <?
  };
  ?>
  <h3> This is your new string:  <font size="5" color="red"><? print reverseString($str); ?>.</font></h3>
  <?
} else {
?>

<h3>Type in a String...</h3>
<form method="post">
<!-- <form method="post" action="file.php"> -->
<div>
  <input name="string" placeholder="String" />
</div>
<div>
  <input type="submit" >
</div>
</form>

<?php
}
?>
