<?php
if (isset($_POST['submit']) || $_SERVER["QUERY_STRING"] == "dev") {
  $CurrentMenu = "m7";
  $PageTitle = "Contact Us";
  $Description = "Contact Molded Dimensions. We'd love to hear from you!";
  $Keywords = "molded dimensions, product development, product development process, part design, tooling design, process design, materials engineering, FDA, NSF, 3A compliance, polyurethane compounds, rubber molding, rubber molds, polyurethane molding, molding company, rubber molding company, polyurethane molding company";
  include "header.php";

  // Settings for randomizing the field names
  $salt = "ForesiteGroupMoldedDimensions";
  ?>

  <!-- Event snippet for Contact Form Submission conversion page -->
  <script>gtag('event', 'conversion', {'send_to': 'AW-479502533/KWbhCLHX9e8BEMXB0uQB'});</script>

  <h1>Thank You</h1>

  <div class="two-third">
    <?php
    if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
      require_once "inc/fintoozler.php";
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
      $responsekeys = json_decode($response);
      
      if ($responsekeys->success) {
        if (
              $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
              $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
              $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
            ) {
          // All required fields have been filled, so construct the message
          $Message = "";

          if (!empty($_POST['contact'])) $Message .= "Best to contact me by " . $_POST['contact'] . "\n\n";

          $Message .= "Name: " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          $Message .= "Email: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
            $Message .= "Company: " . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          $Message .= "Phone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          $Message .= "\n";

          if (!empty($_POST['service'])) $Message .= "What Service Can We Supply?\n" . $_POST['service'];
          if ((!empty($_POST['service'])) && ($_POST['service'] == "Other") && (!empty($_POST[md5("service_other" . $_POST['ip'] . $salt . $_POST['timestamp'])]))) $Message .= " - ".$_POST[md5('service_other' . $_POST['ip'] . $salt . $_POST['timestamp'])];
          if (!empty($_POST['service'])) $Message .= "\n\n";

          if (!empty($_POST[md5('comments' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
            $Message .= "Comments:\n" . $_POST[md5('comments' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

          $Message = stripslashes($Message);
          
          $Subject = "Contact From Molded Dimensions Website";
          if (!empty($_POST['subject'])) $Subject = $_POST['subject'];
          if ((!empty($_POST['subject'])) && ($_POST['subject'] == "Other") && (!empty($_POST[md5("subject_other" . $_POST['ip'] . $salt . $_POST['timestamp'])]))) $Subject .= " - ".$_POST[md5('subject_other' . $_POST['ip'] . $salt . $_POST['timestamp'])];

          require_once "inc/swiftmailer/swift_required.php";

          $sm = Swift_Message::newInstance();
          $sm->setTo(array("sales@moldeddimensions.com"));
          $sm->setBcc(array("foresitegroupllc@gmail.com","greg@trg-marketing.com","jacob@trg-marketing.com"));
          $sm->setFrom(array("donotreply@foresitegrp.com" => "Contact Form"));
          $sm->setReplyTo($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])]);
          $sm->setSubject($Subject);

          if ($_FILES['file1']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['file1']['tmp_name'])->setFilename($_FILES['file1']['name']));
          if ($_FILES['file2']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['file2']['tmp_name'])->setFilename($_FILES['file2']['name']));
          if ($_FILES['file3']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['file3']['tmp_name'])->setFilename($_FILES['file3']['name']));
          if ($_FILES['file4']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['file4']['tmp_name'])->setFilename($_FILES['file4']['name']));
          if ($_FILES['file5']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['file5']['tmp_name'])->setFilename($_FILES['file5']['name']));

          $sm->setBody($Message);

          // Create the Transport and Mailer
          $transport = Swift_MailTransport::newInstance();
          $mailer = Swift_Mailer::newInstance($transport);
          
          // Send it!
          $result = $mailer->send($sm);

          echo "Thank you for your interest in Molded Dimensions. Someone will contact you soon!";
        } else {
          echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
        }
      } else {
        echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
      }
    }
    ?>
  </div>

  <div class="one-third last">
    Please feel free to call us directly at <strong style="color: #C91D1B;">262-284-9455</strong> or email us at <?php email("sales@moldeddimensions.com"); ?>.<br>
    <br>

    <h2>Mailing Address</h2>
    <strong>MOLDED DIMENSIONS LLC</strong><br>
    701 Sunset Road, PO Box 364<br>
    Port Washington WI 53074
  </div>

  <?php
  include "footer.php";
} else {
  header("Location: contact-us.php");
}