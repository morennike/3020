<?php
  //GET THE DATA FROM THE FORM
  $number =$_POST['number'];
  $SubmitNumber = $_POST['SubmitNumber'];
  //validation
  if(empty($number)){
$msg= 'Number is required GetNumber1.html';
  }
// to check value is numeric
  else if (!is_numeric($number)){
  	$msg ='Data not numeric GetNumber1.html'
  }
  else if(number_format($number, != 3)){
$msg = 'number has to be 3 decimal number GetNumber1.html'
  } else {
  	// SUCESSS
  }
  ?>