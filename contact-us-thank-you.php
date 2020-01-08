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

  <h1>Thank You</h1>

  <div class="two-third">
  <?php
    if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
      require_once "inc/recaptchalib.php";
      $response = null;
      $reCaptcha = new ReCaptcha($RCkey);
      if ($_POST["g-recaptcha-response"]) $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
      
      if ($response != null && $response->success) {
        if (
              $_POST['department'] != "" &&
              $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
              $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
              $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
            ) {
          // All required fields have been filled, so construct the message
          $Message = "";

          $Message .= "Department: " . $_POST['department'] . "\n\n";

          $Message .= "Name: " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          $Message .= "Email: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
            $Message .= "Company: " . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          $Message .= "Phone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

          $Message .= "\n";

          if (!empty($_POST[md5('comments' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
            $Message .= "Comments:\n" . $_POST[md5('comments' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

          $Message = stripslashes($Message);

          $Subject = "Contact From Molded Dimensions Website";
          $SendTo = ($_POST['department'] == "Human Resources") ? "hr@moldeddimensions.com" : "sales@moldeddimensions.com";
          $Headers = "From: Contact Form <contactform@moldeddimensions.com>\r\n";
          $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
          $Headers .= "Cc: prudolf@moldeddimensions.com\r\n";
          $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

          mail($SendTo, $Subject, $Message, $Headers);

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
    Please feel free to call us directly at 262-284-9455 or email us at <?php email("sales@moldeddimensions.com"); ?>.<br>
    <br>

    <h2>Mailing Address</h2>
    <strong>MOLDED DIMENSIONS LLC</strong><br>
    701 Sunset Road, PO Box 364<br>
    Port Washington WI 53074<br>
    <br>

    Main Phone: 262-284-9455<br>
    Main Fax: 262-284-0696<br>
    <br>

    Engineering Fax: 262-284-9517<br>
    Urethane Fax: 262-284-9456<br>
    HR Fax: 262-284-9517
  </div>

  <?php
  include "footer.php";
} else {
  header("Location: contact-us.php");
}