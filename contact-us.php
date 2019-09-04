<?php
$CurrentMenu = "m7";
$PageTitle = "Contact Us";
$Description = "Contact Molded Dimensions. We'd love to hear from you!";
$Keywords = "molded dimensions, product development, product development process, part design, tooling design, process design, materials engineering, FDA, NSF, 3A compliance, polyurethane compounds, rubber molding, rubber molds, polyurethane molding, molding company, rubber molding company, polyurethane molding company";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupMoldedDimensions";
?>

<h1>Need More Info?</h1>

<div class="two-third">
  <script type="text/javascript">
    function checkform (form) {
      if (document.getElementById('department').value == "") { alert('Department required.'); document.getElementById('department').focus(); return false ; }
      if (document.getElementById('name').value == "") { alert('Name required.'); document.getElementById('name').focus(); return false ; }
      if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
      if (document.getElementById('phone').value == "") { alert('Phone required.'); document.getElementById('phone').focus(); return false ; }
      return true ;
    }
  </script>

  <form action="contact-us-thank-you.php" method="POST" onSubmit="return checkform(this)" id="contact">
    <div>
      Please fill in your request for contact. Remember to select the department you wish to contact.<br>
      <br>
      
      <label for="department">Department <span>*</span></label><br>
      <select name="department" id="department">
        <option value="">Please select one...</option>
        <option value="General Inquiries">General Inquiries</option>
        <option value="Sales Department">Sales Department</option>
        <option value="Human Resources">Human Resources</option>
      </select><br>
      <br>

      Best to contact me by &nbsp; 
      <input type="radio" name="contact" value="Email" id="email-r"> <label for="email-r">Email</label> &nbsp; 
      <input type="radio" name="contact" value="Phone" id="phone-r"> <label for="phone-r">Phone</label><br>
      <br>

      <label for="name">Name <span>*</span></label><br>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name"><br>
      <br>

      <label for="email">Email <span>*</span></label><br>
      <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email"><br>
      <br>

      <label for="company">Company</label><br>
      <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company"><br>
      <br>

      <label for="phone">Phone <span>*</span></label><br>
      <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone"><br>
      <br>

      <label for="comments">Comments</label><br>
      <textarea name="<?php echo md5("comments" . $ip . $salt . $timestamp); ?>" id="comments"></textarea><br>
      <br>

      <script src='https://www.google.com/recaptcha/api.js'></script>
      <div class="g-recaptcha" data-sitekey="6Ldfu08UAAAAADe5Ys4WvB2gJKp-M4--7R85mvCU"></div>
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
  Main Fax: 262-284-0696<br>
  <br>

  Engineering Fax: 262-284-9517<br>
  Urethane Fax: 262-284-9456<br>
  HR Fax: 262-284-9517
</div>

<?php include "footer.php"; ?>