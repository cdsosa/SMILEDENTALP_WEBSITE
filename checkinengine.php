<?php
$EmailFrom = "Patient Check-In";
$EmailTo = "csosa@iogproducts.com";
$Subject = "Online Check-In";
$YourName = Trim(stripslashes($_POST['YourName'])); 
$YourPhone = Trim(stripslashes($_POST['YourPhone'])); 
$YourEmail = Trim(stripslashes($_POST['YourEmail'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $YourName;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $YourPhone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $YourEmail;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=checkinthankyou.php#checkbox\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>