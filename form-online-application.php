<?php
include_once "inc/fintoozler.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
$responsekeys = json_decode($response);

if ($responsekeys->success) {
  $Message = "";

  if ($_POST['firstname'] != "") $Message .= "FIRST NAME: " . $_POST['firstname'] . "\n";
  if ($_POST['lastname'] != "") $Message .= "LAST NAME: " . $_POST['lastname'] . "\n";
  if ($_POST['middlei'] != "") $Message .= "MIDDLE INITIAL: " . $_POST['middlei'] . "\n";

  if ($_POST['firstname'] != "" || $_POST['lastname'] != "" || $_POST['middlei'] != "") $Message .= "\n";

  if ($_POST['address'] != "") $Message .= "STREET ADDRESS: " . $_POST['address'] . "\n";
  if ($_POST['city'] != "") $Message .= "CITY: " . $_POST['city'] . "\n";
  if ($_POST['state'] != "") $Message .= "STATE: " . $_POST['state'] . "\n";
  if ($_POST['zip'] != "") $Message .= "ZIP CODE: " . $_POST['zip'] . "\n";

  if ($_POST['address'] != "" || $_POST['city'] != "" || $_POST['state'] != "" || $_POST['zip'] != "") $Message .= "\n";

  if ($_POST['phone'] != "") $Message .= "PHONE: " . $_POST['phone'] . "\n";
  if ($_POST['email'] != "") $Message .= "EMAIL: " . $_POST['email'] . "\n";

  if ($_POST['phone'] != "" || $_POST['email'] != "") $Message .= "\n";

  if (!empty($_POST['age'])) $Message .= "ARE YOU AT LEAST 18 YEARS OLD?: " . $_POST['age'] . "\n\n";

  if (!empty($_POST['time'])) $Message .= "FULL TIME OR PART TIME?: " . $_POST['time'] . "\n";
  if ($_POST['salary'] != "") $Message .= "DESIRED SALARY: " . $_POST['salary'] . "\n";
  if ($_POST['position'] != "") $Message .= "POSITION APPLIED FOR: " . $_POST['position'] . "\n";
  if ($_POST['shift'] != "") $Message .= "DESIRED SHIFT: " . $_POST['shift'] . "\n";

  if (!empty($_POST['time']) || $_POST['salary'] != "" || $_POST['position'] != "" || $_POST['shift'] != "") $Message .= "\n";

  if (!empty($_POST['citizen'])) $Message .= "ARE YOU A CITIZEN OF THE UNITED STATES?: " . $_POST['citizen'] . "\n";
  if (!empty($_POST['authorized'])) $Message .= "ARE YOU LEGALLY AUTHORIZED TO WORK IN THE US?: " . $_POST['authorized'] . "\n";

  if (!empty($_POST['citizen']) || !empty($_POST['authorized'])) $Message .= "\n";

  if (!empty($_POST['felony'])) $Message .= "HAVE YOU EVER BEEN CONVICTED OF A FELONY?: " . $_POST['felony'] . "\n";
  if ($_POST['felonyexplain'] != "") $Message .= "IF YES EXPLAIN 1) NATURE OF CRIME, 2) DATE OF CONVICTION, AND 3) STATE IN WHICH CONVICTED:\n" . $_POST['felonyexplain'] . "\n";

  if (!empty($_POST['felony']) || $_POST['felonyexplain'] != "") $Message .= "\n";

  if (!empty($_POST['pending'])) $Message .= "DO YOU HAVE ANY PENDING CRIMINAL CHARGES AGAINST YOU?: " . $_POST['pending'] . "\n";
  if ($_POST['pendingexplain'] != "") $Message .= "IF YES, DESCRIBE THE 1) NATURE OF CHARGES, 2) DATE ISSUED, AND 3) COUNTY AND STATE WHERE ISSUED:\n" . $_POST['pendingexplain'] . "\n";

  if (!empty($_POST['pending']) || $_POST['pendingexplain'] != "") $Message .= "\n";

  if (!empty($_POST['worked'])) $Message .= "HAVE YOU EVER WORKED FOR THIS COMPANY BEFORE?: " . $_POST['worked'] . "\n";
  if ($_POST['workedwhen'] != "") $Message .= "IF SO WHEN?:\n" . $_POST['workedwhen'] . "\n";

  if (!empty($_POST['worked']) || $_POST['workedwhen'] != "") $Message .= "\n";

  if ($_POST['referred'] != "") $Message .= "HOW WERE YOU REFERRED TO MOLDED DIMENSIONS?: " . $_POST['referred'] . "\n\n";

  // PAGE 2
  if ($_POST['officeequipment'] != "") $Message .= "IF RELEVANT, PLEASE DESCRIBE WORK PROCESSING SPEED, SOFTWARE KNOWLEDGE, AND OFFICE EQUIPMENT:\n" . $_POST['officeequipment'] . "\n\n";

  if ($_POST['manufacturingequipment'] != "") $Message .= "IF RELEVANT, PLEASE DESCRIBE EXPERIENCE USING MANUFACTURING MACHINES AND EQUIPMENT:\n" . $_POST['manufacturingequipment'] . "\n\n";

  $education = "no";
  foreach($_POST as $key => $value) if (strpos($key, "highschool") === 0 || strpos($key, "college") === 0 || strpos($key, "graduate") === 0 || strpos($key, "other") === 0) if ($_POST[$key] != "") $education = "yes";
  if ($education == "yes") $Message .= "EDUCATION\n";

  if ($_POST['highschool'] != "") $Message .= "HIGH SCHOOL: " . $_POST['highschool'] . "\n";
  if ($_POST['highschooladdress'] != "") $Message .= "HIGH SCHOOL ADDRESS: " . $_POST['highschooladdress'] . "\n";
  if ($_POST['highschoolfrom'] != "") $Message .= "HIGH SCHOOL FROM: " . $_POST['highschoolfrom'] . "\n";
  if ($_POST['highschoolto'] != "") $Message .= "HIGH SCHOOL TO: " . $_POST['highschoolto'] . "\n";
  if ($_POST['highschooldegree'] != "") $Message .= "HIGH SCHOOL DEGREE: " . $_POST['highschooldegree'] . "\n";
  if (!empty($_POST['highschoolgraduate'])) $Message .= "DID YOU GRADUATE HIGH SCHOOL?: " . $_POST['highschoolgraduate'] . "\n";

  $highschool = "no";
  foreach($_POST as $key => $value) if (strpos($key, "highschool") === 0) if ($_POST[$key] != "") $highschool = "yes";
  if ($highschool == "yes") $Message .= "\n";

  if ($_POST['college'] != "") $Message .= "COLLEGE: " . $_POST['college'] . "\n";
  if ($_POST['collegeaddress'] != "") $Message .= "COLLEGE ADDRESS: " . $_POST['collegeaddress'] . "\n";
  if ($_POST['collegefrom'] != "") $Message .= "COLLEGE FROM: " . $_POST['collegefrom'] . "\n";
  if ($_POST['collegeto'] != "") $Message .= "COLLEGE TO: " . $_POST['collegeto'] . "\n";
  if ($_POST['collegedegree'] != "") $Message .= "COLLEGE DEGREE: " . $_POST['collegedegree'] . "\n";
  if (!empty($_POST['collegegraduate'])) $Message .= "DID YOU GRADUATE COLLEGE?: " . $_POST['collegegraduate'] . "\n";

  $college = "no";
  foreach($_POST as $key => $value) if (strpos($key, "college") === 0) if ($_POST[$key] != "") $college = "yes";
  if ($college == "yes") $Message .= "\n";

  if ($_POST['graduate'] != "") $Message .= "GRADUATE: " . $_POST['graduate'] . "\n";
  if ($_POST['graduateaddress'] != "") $Message .= "GRADUATE ADDRESS: " . $_POST['graduateaddress'] . "\n";
  if ($_POST['graduatefrom'] != "") $Message .= "GRADUATE FROM: " . $_POST['graduatefrom'] . "\n";
  if ($_POST['graduateto'] != "") $Message .= "GRADUATE TO: " . $_POST['graduateto'] . "\n";
  if ($_POST['graduatedegree'] != "") $Message .= "GRADUATE DEGREE: " . $_POST['graduatedegree'] . "\n";
  if (!empty($_POST['graduategraduate'])) $Message .= "DID YOU GRADUATE GRADUATE SCHOOL?: " . $_POST['graduategraduate'] . "\n";

  $graduate = "no";
  foreach($_POST as $key => $value) if (strpos($key, "graduate") === 0) if ($_POST[$key] != "") $graduate = "yes";
  if ($graduate == "yes") $Message .= "\n";

  if ($_POST['other'] != "") $Message .= "OTHER: " . $_POST['other'] . "\n";
  if ($_POST['otheraddress'] != "") $Message .= "OTHER ADDRESS: " . $_POST['otheraddress'] . "\n";
  if ($_POST['otherfrom'] != "") $Message .= "OTHER FROM: " . $_POST['otherfrom'] . "\n";
  if ($_POST['otherto'] != "") $Message .= "OTHER TO: " . $_POST['otherto'] . "\n";
  if ($_POST['otherdegree'] != "") $Message .= "OTHER DEGREE: " . $_POST['otherdegree'] . "\n";
  if (!empty($_POST['othergraduate'])) $Message .= "DID YOU GRADUATE OTHER?: " . $_POST['othergraduate'] . "\n";

  $other = "no";
  foreach($_POST as $key => $value) if (strpos($key, "other") === 0) if ($_POST[$key] != "") $other = "yes";
  if ($other == "yes") $Message .= "\n";

  $training = "no";
  foreach($_POST as $key => $value) if (strpos($key, "training") === 0) if ($_POST[$key] != "") $training = "yes";
  if ($training == "yes") $Message .= "TRAINING COURSES\n";

  if ($_POST['trainingcourse1'] != "") $Message .= "COURSE/SEMINAR: " . $_POST['trainingcourse1'] . "\n";
  if ($_POST['trainingorg1'] != "") $Message .= "ORGANIZATION: " . $_POST['trainingorg1'] . "\n";
  if ($_POST['trainingcontent1'] != "") $Message .= "CONTENT: " . $_POST['trainingcontent1'] . "\n";
  if ($_POST['trainingdate1'] != "") $Message .= "DATE(S) ATTENDED: " . $_POST['trainingdate1'] . "\n";

  if ($_POST['trainingcourse2'] != "") $Message .= "COURSE/SEMINAR: " . $_POST['trainingcourse2'] . "\n";
  if ($_POST['trainingorg2'] != "") $Message .= "ORGANIZATION: " . $_POST['trainingorg2'] . "\n";
  if ($_POST['trainingcontent2'] != "") $Message .= "CONTENT: " . $_POST['trainingcontent2'] . "\n";
  if ($_POST['trainingdate2'] != "") $Message .= "DATE(S) ATTENDED: " . $_POST['trainingdate2'] . "\n";

  if ($_POST['trainingcourse3'] != "") $Message .= "COURSE/SEMINAR: " . $_POST['trainingcourse3'] . "\n";
  if ($_POST['trainingorg3'] != "") $Message .= "ORGANIZATION: " . $_POST['trainingorg3'] . "\n";
  if ($_POST['trainingcontent3'] != "") $Message .= "CONTENT: " . $_POST['trainingcontent3'] . "\n";
  if ($_POST['trainingdate3'] != "") $Message .= "DATE(S) ATTENDED: " . $_POST['trainingdate3'] . "\n";

  if ($_POST['trainingcourse4'] != "") $Message .= "COURSE/SEMINAR: " . $_POST['trainingcourse4'] . "\n";
  if ($_POST['trainingorg4'] != "") $Message .= "ORGANIZATION: " . $_POST['trainingorg4'] . "\n";
  if ($_POST['trainingcontent4'] != "") $Message .= "CONTENT: " . $_POST['trainingcontent4'] . "\n";
  if ($_POST['trainingdate4'] != "") $Message .= "DATE(S) ATTENDED: " . $_POST['trainingdate4'] . "\n";

  if ($training == "yes") $Message .= "\n";

  // PAGE 3
  $employment = "no";
  foreach($_POST as $key => $value) if (strpos($key, "employment") === 0) if ($_POST[$key] != "") $employment = "yes";
  if ($employment == "yes") $Message .= "EMPLOYMENT HISTORY\n";

  if ($_POST['employmentcompany1'] != "") $Message .= "COMPANY [1]: " . $_POST['employmentcompany1'] . "\n";
  if ($_POST['employmentphone1'] != "") $Message .= "PHONE [1]: " . $_POST['employmentphone1'] . "\n";
  if ($_POST['employmentsupervisor1'] != "") $Message .= "SUPERVISOR [1]: " . $_POST['employmentsupervisor1'] . "\n";
  if ($_POST['employmentaddress1'] != "") $Message .= "ADDRESS [1]: " . $_POST['employmentaddress1'] . "\n";
  if ($_POST['employmenttitle1'] != "") $Message .= "JOB TITLE [1]: " . $_POST['employmenttitle1'] . "\n";
  if ($_POST['employmentfrom1'] != "") $Message .= "FROM [1]: " . $_POST['employmentfrom1'] . "\n";
  if ($_POST['employmentto1'] != "") $Message .= "TO [1]: " . $_POST['employmentto1'] . "\n";
  if (!empty($_POST['empcontact1'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR? [1]: " . $_POST['empcontact1'] . "\n";
  if ($_POST['employmentstartingsalary1'] != "") $Message .= "STARTING SALARY [1]: " . $_POST['employmentstartingsalary1'] . "\n";
  if ($_POST['employmentendingsalary1'] != "") $Message .= "ENDING SALARY [1]: " . $_POST['employmentendingsalary1'] . "\n";
  if ($_POST['employmentleaving1'] != "") $Message .= "REASON FOR LEAVING [1]: " . $_POST['employmentleaving1'] . "\n";
  if ($_POST['employmentreponsibilities1'] != "") $Message .= "RESPONSIBILITIES [1]:\n" . $_POST['employmentreponsibilities1'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  if ($_POST['employmentcompany2'] != "") $Message .= "COMPANY [2]: " . $_POST['employmentcompany2'] . "\n";
  if ($_POST['employmentphone2'] != "") $Message .= "PHONE [2]: " . $_POST['employmentphone2'] . "\n";
  if ($_POST['employmentsupervisor2'] != "") $Message .= "SUPERVISOR [2]: " . $_POST['employmentsupervisor2'] . "\n";
  if ($_POST['employmentaddress2'] != "") $Message .= "ADDRESS [2]: " . $_POST['employmentaddress2'] . "\n";
  if ($_POST['employmenttitle2'] != "") $Message .= "JOB TITLE [2]: " . $_POST['employmenttitle2'] . "\n";
  if ($_POST['employmentfrom2'] != "") $Message .= "FROM [2]: " . $_POST['employmentfrom2'] . "\n";
  if ($_POST['employmentto2'] != "") $Message .= "TO [2]: " . $_POST['employmentto2'] . "\n";
  if (!empty($_POST['empcontact2'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR? [2]: " . $_POST['empcontact2'] . "\n";
  if ($_POST['employmentstartingsalary2'] != "") $Message .= "STARTING SALARY [2]: " . $_POST['employmentstartingsalary2'] . "\n";
  if ($_POST['employmentendingsalary2'] != "") $Message .= "ENDING SALARY [2]: " . $_POST['employmentendingsalary2'] . "\n";
  if ($_POST['employmentleaving2'] != "") $Message .= "REASON FOR LEAVING [2]: " . $_POST['employmentleaving2'] . "\n";
  if ($_POST['employmentreponsibilities2'] != "") $Message .= "RESPONSIBILITIES [2]:\n" . $_POST['employmentreponsibilities2'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  if ($_POST['employmentcompany3'] != "") $Message .= "COMPANY [3]: " . $_POST['employmentcompany3'] . "\n";
  if ($_POST['employmentphone3'] != "") $Message .= "PHONE [3]: " . $_POST['employmentphone3'] . "\n";
  if ($_POST['employmentsupervisor3'] != "") $Message .= "SUPERVISOR [3]: " . $_POST['employmentsupervisor3'] . "\n";
  if ($_POST['employmentaddress3'] != "") $Message .= "ADDRESS [3]: " . $_POST['employmentaddress3'] . "\n";
  if ($_POST['employmenttitle3'] != "") $Message .= "JOB TITLE [3]: " . $_POST['employmenttitle3'] . "\n";
  if ($_POST['employmentfrom3'] != "") $Message .= "FROM [3]: " . $_POST['employmentfrom3'] . "\n";
  if ($_POST['employmentto3'] != "") $Message .= "TO [3]: " . $_POST['employmentto3'] . "\n";
  if (!empty($_POST['empcontact3'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR? [3]: " . $_POST['empcontact3'] . "\n";
  if ($_POST['employmentstartingsalary3'] != "") $Message .= "STARTING SALARY [3]: " . $_POST['employmentstartingsalary3'] . "\n";
  if ($_POST['employmentendingsalary3'] != "") $Message .= "ENDING SALARY [3]: " . $_POST['employmentendingsalary3'] . "\n";
  if ($_POST['employmentleaving3'] != "") $Message .= "REASON FOR LEAVING [3]: " . $_POST['employmentleaving3'] . "\n";
  if ($_POST['employmentreponsibilities3'] != "") $Message .= "RESPONSIBILITIES [3]:\n" . $_POST['employmentreponsibilities3'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  // PAGE 4
  $aa = "no";
  foreach($_POST as $key => $value) if (strpos($key, "aa") === 0) if ($_POST[$key] != "") $aa = "yes";
  if ($aa == "yes") $Message .= "AFFIRMATIVE ACTION\n";

  if ($_POST['aaname'] != "") $Message .= "APPLICANT NAME: " . $_POST['aaname'] . "\n";
  if ($_POST['aapos'] != "") $Message .= "POSITION APPLIED FOR: " . $_POST['aapos'] . "\n";
  if (!empty($_POST['aasex'])) $Message .= "MALE OR FEMALE: " . $_POST['aasex'] . "\n";
  if (!empty($_POST['aarace'])) $Message .= "RACE/ETHNIC GROUP: " . $_POST['aarace'] . "\n";
  if (!empty($_POST['aareferred'])) $Message .= "HOW WERE YOU REFERRED TO THIS JOB? " . $_POST['aareferred'];
  if ($_POST['aareferredother'] != "") $Message .= " - " . $_POST['aareferredother'];
  if ($_POST['aareferredgov'] != "") $Message .= " - " . $_POST['aareferredgov'];

  $Message .= "\n\n";

  $Message = stripslashes($Message);

  require_once "inc/swiftmailer/swift_required.php";

  $sm = Swift_Message::newInstance();
  $sm->setTo(array("hr@moldeddimensions.com"));
  $sm->setBcc(array("foresitegroupllc@gmail.com"));
  $sm->setFrom(array("donotreply@foresitegrp.com" => "Online Application Form"));
  $sm->setReplyTo($_POST['email']);
  $sm->setSubject("Online Application");

  if ($_FILES['resume']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['resume']['tmp_name'])->setFilename($_FILES['resume']['name']));

  $sm->setBody($Message);

  // Create the Transport and Mailer
  $transport = Swift_MailTransport::newInstance();
  $mailer = Swift_Mailer::newInstance($transport);
  
  // Send it!
  $result = $mailer->send($sm);

  echo "Thank you for your application.";
}
?>