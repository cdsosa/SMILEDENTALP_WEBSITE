<?php
$EmailFrom = "Dental Patient";
$EmailTo = "info@smiledentalpractice.com";
$Subject = "Patient General Information";
foreach($_POST as $key => $value) {
  $post_key = $key;
  $$post_key = trim(stripslashes($value));
}

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
$Body .= "Birth Date: ";
$Body .= $BirthDate;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $AddressLoc;
$Body .= "\n";
$Body .= "City & State: ";
$Body .= $CityState;
$Body .= "\n";
$Body .= "Zip Code: ";
$Body .= $ZipCode;
$Body .= "\n"; 
$Body .= "Cell Phone: ";
$Body .= $CellPhone; 
$Body .= "\n";
$Body .= "Home Phone: ";
$Body .= $HomePhone;
$Body .= "\n";
$Body .= "Work Phone?: ";
$Body .= $WorkPhone;
$Body .= "\n";
$Body .= "Email Address: ";
$Body .= $EmailAddress;
$Body .= "\n";
$Body .= "Employer Name: ";
$Body .= $EmployerName;
$Body .= "\n";
$Body .= "Social Security: ";
$Body .= $SocialSecurity ;
$Body .= "\n";
$Body .= "Drivers License: ";
$Body .= $DriveLis;
$Body .= "\n";
$Body .= "Occupation: ";
$Body .= $Occupation;
$Body .= "\n";
$Body .= "Name of Insured: ";
$Body .= $Insured;
$Body .= "\n";
$Body .= "Relationship top patient: ";
$Body .= $Relationship;
$Body .= "\n";
$Body .= "Social Security: ";
$Body .= $InsurSocialSecurity;
$Body .= "\n";
$Body .= "Drivers License: ";
$Body .= $InsurDriveLis;
$Body .= "\n";
$Body .= "Birth Date: ";
$Body .= $InsurBirthDate;
$Body .= "\n";
$Body .= "Employers Phone Number: ";
$Body .= $EmployerPhone;
$Body .= "\n";
$Body .= "Employers Address: ";
$Body .= $EmployerAddress;
$Body .= "\n";
$Body .= "Employer City & State: ";
$Body .= $EmployerCityState;
$Body .= "\n";
$Body .= "Employer Zip Code: ";
$Body .= $EmployerZipCode;
$Body .= "\n";
$Body .= "Insurance Company ";
$Body .= $InsuranceCompany;
$Body .= "\n";
$Body .= "Insurance Company Phone #: ";
$Body .= $InsuranceCompanyPhone;
$Body .= "\n";
$Body .= "Union/Local: ";
$Body .= $UnionLocal;
$Body .= "\n";
$Body .= "Group #: ";
$Body .= $Group;
$Body .= "\n";
$Body .= "Emergency Contact Name: ";
$Body .= $EmerName;
$Body .= "\n";
$Body .= "Relationship To Contact: ";
$Body .= $EmerRelationship;
$Body .= "\n";
$Body .= "Emergency Contact Phone #: ";
$Body .= $EmerPhone;
$Body .= "\n";
$Body .= "Whom should we thank for referring you to our practice?:";
$Body .= $ThankChoices;
$Body .= "\n";
if ($_POST['Other']) {
    $Body .= "Other Source:";
    $Body .= $Other;
    $Body .= "\n";
}
$Body .= "Consent Initials: ";
$Body .= $ConsentInitials;
$Body .= "\n";
$Body .= "Consent Date: ";
$Body .= $ConsentDate;
$Body .= "\n";
$Body .= "Authorization Initials: ";
$Body .= $AuthInitials;
$Body .= "\n";
$Body .= "Authorized Date: ";
$Body .= $AuthDate;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=generalpatientformsent.html#btn-success-two-stick\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>