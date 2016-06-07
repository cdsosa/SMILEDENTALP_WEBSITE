<?php
$EmailFrom = "Dental Patient";
$EmailTo = "info@smiledentalpractice.com";
$Subject = "Patient Medical/Dental Information";
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
$Body .= "Patient's Name: ";
$Body .= $PatientName;
$Body .= "\n";
$Body .= "Age: ";
$Body .= $PatientAge;
$Body .= "\n";
$Body .= "Physician's Name: ";
$Body .= $PhysName;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $PhoneNumber;
$Body .= "\n";
$Body .= "Medications: ";
$Body .= $PhoneNumber;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $CalendarDate;
$Body .= "\n"; 
$Body .= "Initials: ";
$Body .= $Initials; 
$Body .= "\n";


// Radio
$Body .= "Do you have Allergies?: ";
$Body .= $Allergies;
$Body .= "\n";
if ($_POST['IfYesAllergies']) {
    $Body .= "Allergy Type:";
    $Body .= $IfYesAllergies;
    $Body .= "\n";
}
$Body .= "Do you have Hepatitis?: ";
$Body .= $Hepatitis;
$Body .= "\n";
if ($_POST['IfYesHepatitis']) {
    $Body .= "Hepatitis Type:";
    $Body .= $IfYesHepatitis;
    $Body .= "\n";
}
$Body .= "Do you have Venereal Disease?: ";
$Body .= $VDisease;
$Body .= "\n";
$Body .= "Do you have Fever Blisters?: ";
$Body .= $Fever;
$Body .= "\n";
$Body .= "Do you have Fever Cancer?: ";
$Body .= $Fever;
$Body .= "\n";
if ($_POST['IfYesCancer']) {
    $Body .= "Cancer Type:";
    $Body .= $IfYesCancer;
    $Body .= "\n";
}
$Body .= "Are you in Chemotherapy?: ";
$Body .= $Fever;
$Body .= "\n";
$Body .= "Are you in Radiation Therapy?: ";
$Body .= $RadTherapy;
$Body .= "\n";
$Body .= "Are you Immunnosuppressed?: ";
$Body .= $Immunnosuppressed;
$Body .= "\n";
$Body .= "Are you in Psychiatric Treatment?: ";
$Body .= $PsychiatricTreatment;
$Body .= "\n";
$Body .= "Do you have Toothache?: ";
$Body .= $Toothache;
$Body .= "\n";
$Body .= "Do you have Bleeding Gums?: ";
$Body .= $Bleeding;
$Body .= "\n";
$Body .= "Do you have Bad Breath/taste?: ";
$Body .= $Breath;
$Body .= "\n";
$Body .= "Do you have Teeth Sensitivity?: ";
$Body .= $TeethSensitivity;
$Body .= "\n";
$Body .= "Are you pleased with your smile?: ";
$Body .= $Pleasedwithsmile;
$Body .= "\n";
if ($_POST['IfYessmile']) {
    $Body .= "Why don't you like your smile?:";
    $Body .= $IfYessmile;
    $Body .= "\n";
}
$Body .= "Are you pleased with your previous dental treatment?: ";
$Body .= $Satisfied;
$Body .= "\n";
if ($_POST['IfNoGoodTreatment']) {
    $Body .= "Why were you not satified with your previous dental treatment?:";
    $Body .= $IfNoGoodTreatment;
    $Body .= "\n";
}
$Body .= "Do you have High Blood Pressure?: ";
$Body .= $BloodPressure;
$Body .= "\n";
$Body .= "Do you have Low Blood Pressure?: ";
$Body .= $PressureLow;
$Body .= "\n";
$Body .= "Do you have Fainting/Dizzy Spells?: ";
$Body .= $Fainting;
$Body .= "\n";
$Body .= "Do you have Bleeding Disorders?: ";
$Body .= $BleedingDisorders;
$Body .= "\n";
$Body .= "Did you have Heart Surgery?: ";
$Body .= $HeartSurgery;
$Body .= "\n";
$Body .= "Did you have a Heart Attack?: ";
$Body .= $HeartAttack;
$Body .= "\n";
$Body .= "Do you have Angina?: ";
$Body .= $Angina;
$Body .= "\n";
$Body .= "Do you have an Artificial Heart Valve?: ";
$Body .= $HeartValve;
$Body .= "\n";
$Body .= "Did you have Stroke?: ";
$Body .= $Stroke;
$Body .= "\n";
$Body .= "Do you have an Artificial Joint?: ";
$Body .= $ArtificialJoint;
$Body .= "\n";
$Body .= "Are you on Birth Control?: ";
$Body .= $BirthControl;
$Body .= "\n";
$Body .= "Did you take Bisphosphonates?: ";
$Body .= $Bisphosphonates;
$Body .= "\n";
$Body .= "Did you take Phenfen?: ";
$Body .= $Phenfen;
$Body .= "\n";
$Body .= "Are you Catching food with your Teeth?: ";
$Body .= $CatchingFood;
$Body .= "\n";
$Body .= "Do you have Diabetes?: ";
$Body .= $Diabetes;
$Body .= "\n";
$Body .= "Do you have Asthma?: ";
$Body .= $Asthma;
$Body .= "\n";
$Body .= "Do you have Sinus Trouble?: ";
$Body .= $SinusTrouble;
$Body .= "\n";
$Body .= "Do you have Emphysema?: ";
$Body .= $Emphysema;
$Body .= "\n";
$Body .= "Do you have Tuberculosis?: ";
$Body .= $Tuberculosis;
$Body .= "\n";
$Body .= "Do you have Thyroid Problems?: ";
$Body .= $ThyroidProblems;
$Body .= "\n";
$Body .= "Do you have Liver Problems?: ";
$Body .= $LiverProblems;
$Body .= "\n";
$Body .= "Do you have Epilepsy?: ";
$Body .= $Epilepsy;
$Body .= "\n";
$Body .= "Do you have Anemia?: ";
$Body .= $Anemia;
$Body .= "\n";
$Body .= "Do you have Kidney Disease?: ";
$Body .= $KidneyDisease;
$Body .= "\n";
$Body .= "Do you have Arthritis?: ";
$Body .= $Arthritis;
$Body .= "\n";
$Body .= "Do you have Rheumatic Fever?: ";
$Body .= $RheumaticFever;
$Body .= "\n";
$Body .= "Do you have Yellow Teeth?: ";
$Body .= $YellowTeeth;
$Body .= "\n";
$Body .= "Do you have Loose Teeth?: ";
$Body .= $LooseTeeth;
$Body .= "\n";
$Body .= "Do you Smoke Tobacco?: ";
$Body .= $SmokingTobacco;
$Body .= "\n";
$Body .= "Are you Pregnant?: ";
$Body .= $Pregnant;
$Body .= "\n";
if ($_POST['IfYesPregnant']) {
    $Body .= "How many months pregnant?:";
    $Body .= $IfYesPregnant;
    $Body .= "\n";
}

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=medicaldentalinfosent.html#btn-success-stick\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>