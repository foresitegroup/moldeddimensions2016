<?php
if (isset($_POST['submit']) || $_SERVER["QUERY_STRING"] == "dev") {
  $CurrentMenu = "m7";
  $PageTitle = "Request More Information";
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
            $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
          ) {
        // All required fields have been filled, so construct the message
        $Message = "";

        if (!empty($_POST['wouldlike'])) {
          foreach($_POST['wouldlike'] as $wouldlike) {
            $Message .= $wouldlike . "\n";
          }

          $Message .= "\n";
        }

        $Message .= "First Name: " . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Last Name: " . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Email: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Company: " . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Address: " . $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        if (!empty($_POST[md5('address2' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Address 2: " . $_POST[md5('address2' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "City: " . $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "State: " . $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Zip Code: " . $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "Phone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

        $Message .= "\n";

        if (!empty($_POST[md5('comments' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
          $Message .= "Comments:\n" . $_POST[md5('comments' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n\n";

        $Message = stripslashes($Message);

        $Subject = "RMI From Molded Dimensions Website";
        $SendTo = "mdisales@moldeddimensions.com,prudolf@moldeddimensions.com";
        $Headers = "Bcc: foresitegroupllc@gmail.com\r\n";
        $Headers .= "From: RMI Form <rmiform@moldeddimensions.com>\r\n";
        $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

        mail($SendTo, $Subject, $Message, $Headers);

        echo "Thank you for your interest in Molded Dimensions. Someone will contact you soon!";
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
  header("Location: rmi.php");
}
?>