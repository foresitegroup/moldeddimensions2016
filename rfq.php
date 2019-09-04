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
  <script type="text/javascript">
    function checkform (form) {
      if (document.getElementById('firstname').value == "") { alert('First Name required.'); document.getElementById('firstname').focus(); return false ; }
      if (document.getElementById('lastname').value == "") { alert('Last Name required.'); document.getElementById('lastname').focus(); return false ; }
      if (document.getElementById('phone').value == "") { alert('Phone required.'); document.getElementById('phone').focus(); return false ; }
      if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
      return true ;
    }
  </script>

  <form action="rfq-thank-you.php" method="POST" enctype="multipart/form-data" onSubmit="return checkform(this)" id="contact">
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