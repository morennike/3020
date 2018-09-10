<?php
  //GET THE DATA FROM THE FORM
  $UN = $_POST['UN'];
  $ND_DP = $_POST['ND_DP'];
  $SubmitNumber = $_POST['SubmitNumber'];

  if(empty($UN)){
$msg= 'UN is required GetNumber.html';
  }
// to check value is numeric
  else if (!is_numeric($UN)){
  	$msg ='Data not numeric GetNumber.html'
  }
  else if(number_format($UN, != 3)){
$msg = 'number has to be 3 decimal number GetNumber.html'
  } else {
  	// SUCESSS
  }
  
//format number
$SN = number_format($UN, $ND_DP);
//reverse number
strrev($SN);
?>



<!DOCTYPE html>
<html>
<head>
	<title>REVERSE</title>
	<link rel="stylesheet" type="text/css" href="A2.css">
</head>
<body>
<label> SN: </label>
<span><?php echo $SN; ?></span>

</body>
</html>