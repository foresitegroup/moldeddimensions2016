<?php
if (isset($_POST['submit']) || $_SERVER["QUERY_STRING"] == "dev") {
  $CurrentMenu = "m7";
  $PageTitle = "Request For Quote";
  $Description = "";
  $Keywords = "";
  include "header.php";

  // Settings for randomizing the field names
  $salt = "ForesiteGroupMoldedDimensions";
  ?>

  <h1>Thank You</h1>

  <div class="two-third">
    <?php
    if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
      if (
            $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
          ) {
        // All required fields have been filled, so construct the message
        $Message = "";

        if (!empty($_POST['contact'])) $Message .= "Best to contact me by " . $_POST['contact'] . "\n\n";

        $Message .= "First Name: " . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Last Name: " . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Phone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Email: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
        
        if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Company: " . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "\n";

        if (!empty($_POST[md5('partdescription' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Part Description:\n" . $_POST[md5('partdescription' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

        if (!empty($_POST[md5('eau' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Estimated Annual Units (EAU): " . $_POST[md5('eau' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

        if (!empty($_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Comment:\n" . $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

        $Message = stripslashes($Message);

        require_once "inc/swiftmailer/swift_required.php";

        $sm = Swift_Message::newInstance();
        $sm->setTo(array("sales@moldeddimensions.com","prudolf@moldeddimensions.com"));
        $sm->setBcc(array("foresitegroupllc@gmail.com"));
        $sm->setFrom(array("rfqform@moldeddimensions.com" => "RFQ Form"));
        $sm->setReplyTo($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])]);
        $sm->setSubject("RFQ From Molded Dimensions Website");

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

        echo "Your quote has been processed and sent to the appropriate parties. Should you have any questions, please contact us at <a href=\"mailto:sales@moldeddimensions.com\">sales@moldeddimensions.com</a>.";
      } else {
        echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
      }
    }
    ?>
  </div>

  <div class="one-third last">
    Please feel free to call us directly at 262-284-9455 or email us at <?php email("mdisales@moldeddimensions.com"); ?>.<br>
    <br>

    <h2>Mailing Address</h2>
    <strong>MOLDED DIMENSIONS LLC</strong><br>
    701 Sunset Road, PO Box 364<br>
    Port Washington WI 53074<br>
    <br>

    Main Phone: 262-284-9455<br>
    Main Fax: 262-284-0696
  </div>

  <?php
  include "footer.php";
} else {
  header("Location: rfq.php");
}
?>