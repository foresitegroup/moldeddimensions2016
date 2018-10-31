<?php
$CurrentMenu = "m7";
$PageTitle = "Request For Quote";
$Description = "";
$Keywords = "";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupMoldedDimensions";
?>

<h1>Submit Your Request</h1>

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
    $sm->setTo(array("mdisales@moldeddimensions.com","prudolf@moldeddimensions.com"));
    $sm->setBcc(array("mark@foresitegrp.com"));
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
} else {
?>
<script type="text/javascript">
  function checkform (form) {
    if (document.getElementById('firstname').value == "") { alert('First Name required.'); document.getElementById('firstname').focus(); return false ; }
    if (document.getElementById('lastname').value == "") { alert('Last Name required.'); document.getElementById('lastname').focus(); return false ; }
    if (document.getElementById('phone').value == "") { alert('Phone required.'); document.getElementById('phone').focus(); return false ; }
    if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
    return true ;
  }
</script>

<form action="rfq.php" method="POST" enctype="multipart/form-data" onSubmit="return checkform(this)" id="contact">
  <div>
    Best to contact me by &nbsp; 
    <input type="radio" name="contact" value="Email" id="email-r"> <label for="email-r">Email</label> &nbsp; 
    <input type="radio" name="contact" value="Phone" id="phone-r"> <label for="phone-r">Phone</label><br>
    <br>

    <label for="firstname">First Name <span>*</span></label><br>
    <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname"><br>
    <br>

    <label for="lastname">Last Name <span>*</span></label><br>
    <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname"><br>
    <br>

    <label for="phone">Phone <span>*</span></label><br>
    <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone"><br>
    <br>

    <label for="email">Email <span>*</span></label><br>
    <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email"><br>
    <br>

    <label for="company">Company</label><br>
    <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company"><br>
    <br>

    <label for="partdescription">Part Description</label>
    <textarea name="<?php echo md5("partdescription" . $ip . $salt . $timestamp); ?>" id="partdescription"></textarea><br>
    <br>

    <label for="eau">Estimated Annual Units (EAU)</label><br>
    <input type="text" name="<?php echo md5("eau" . $ip . $salt . $timestamp); ?>" id="eau"><br>
    <br>

    Please provide your Part Drawing (suggested file format: PDF) &amp; Solid Model File (suggested file format: .x_t, .iges, .step)<br>
    <input type="file" name="file1" id="file1"><br>
    <input type="file" name="file2" id="file2"><br>
    <input type="file" name="file3" id="file3"><br>
    <input type="file" name="file4" id="file4"><br>
    <input type="file" name="file5" id="file5"><br>
    <br>

    <label for="comment">Comment</label><br>
    <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment"></textarea><br>
    <br>

    <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
      
    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <input type="submit" name="submit" value="Submit">
  </div>
</form>
<?php } ?>
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

<?php include "footer.php"; ?>