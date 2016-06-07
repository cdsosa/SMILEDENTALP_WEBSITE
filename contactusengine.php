<?php
$EmailFrom = "Patient Contact";
$EmailTo = "info@smiledentalpractice.com";
$Subject = "Online Check-In";
$FirstName = Trim(stripslashes($_POST['FirstName'])); 
$YourPhone = Trim(stripslashes($_POST['LastName'])); 
$EmailAddress = Trim(stripslashes($_POST['EmailAddress'])); 
$AppointmentFor = Trim(stripslashes($_POST['AppointmentFor'])); 
$PhoneNumber = Trim(stripslashes($_POST['PhoneNumber'])); 
$YourAddress = Trim(stripslashes($_POST['YourAddress'])); 
$YourComments = Trim(stripslashes($_POST['YourComments'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $FirstName;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "Email Address: ";
$Body .= $EmailAddress;
$Body .= "\n";
$Body .= "Appointment For: ";
$Body .= $AppointmentFor;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $PhoneNumber;
$Body .= "\n";
$Body .= "Your Address: ";
$Body .= $YourAddress;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $YourComments;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactusthankyou.html#smile-dentist-app\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>