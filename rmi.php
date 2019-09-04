<?php
$CurrentMenu = "m7";
$PageTitle = "Request More Information";
$Description = "";
$Keywords = "";
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
      if (document.getElementById('firstname').value == "") { alert('First Name required.'); document.getElementById('firstname').focus(); return false ; }
      if (document.getElementById('lastname').value == "") { alert('Last Name required.'); document.getElementById('lastname').focus(); return false ; }
      if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
      if (document.getElementById('address').value == "") { alert('Address required.'); document.getElementById('address').focus(); return false ; }
      if (document.getElementById('City').value == "") { alert('city required.'); document.getElementById('city').focus(); return false ; }
      if (document.getElementById('state').value == "") { alert('State required.'); document.getElementById('state').focus(); return false ; }
      if (document.getElementById('zip').value == "") { alert('Zip Code required.'); document.getElementById('zip').focus(); return false ; }
      if (document.getElementById('phone').value == "") { alert('Phone required.'); document.getElementById('phone').focus(); return false ; }
      return true ;
    }
  </script>

  <form action="rmi-thank-you.php" method="POST" onSubmit="return checkform(this)" id="contact">
    <div>
      Please select one or more<br>
      <input type="checkbox" name="wouldlike[]" value="I would like a Molded Dimensions information packet."> I would like a Molded Dimensions information packet.<br>
      <input type="checkbox" name="wouldlike[]" value="I would like to subscribe to Molded Dimensions newsletter."> I would like to subscribe to Molded Dimensions newsletter.<br>
      <input type="checkbox" name="wouldlike[]" value="I would like a sales call from Molded Dimensions."> I would like a sales call from Molded Dimensions.<br>
      <br>

      <label for="firstname">First Name <span>*</span></label><br>
      <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname"><br>
      <br>

      <label for="lastname">Last Name <span>*</span></label><br>
      <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname"><br>
      <br>

      <label for="email">Email <span>*</span></label><br>
      <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email"><br>
      <br>

      <label for="company">Company</label><br>
      <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company"><br>
      <br>

      <label for="address">Address <span>*</span></label><br>
      <input type="text" name="<?php echo md5("address" . $ip . $salt . $timestamp); ?>" id="address"><br>
      <br>

      <label for="address2">Address 2</label><br>
      <input type="text" name="<?php echo md5("address2" . $ip . $salt . $timestamp); ?>" id="address2"><br>
      <br>

      <label for="city">City <span>*</span></label><br>
      <input type="text" name="<?php echo md5("city" . $ip . $salt . $timestamp); ?>" id="city"><br>
      <br>

      <label for="state">State <span>*</span></label><br>
      <input type="text" name="<?php echo md5("state" . $ip . $salt . $timestamp); ?>" id="state"><br>
      <br>

      <label for="zip">Zip Code <span>*</span></label><br>
      <input type="text" name="<?php echo md5("zip" . $ip . $salt . $timestamp); ?>" id="zip"><br>
      <br>

      <label for="phone">Phone <span>*</span></label><br>
      <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone"><br>
      <br>

      <label for="comments">Comments</label><br>
      <textarea name="<?php echo md5("comments" . $ip . $salt . $timestamp); ?>" id="comments"></textarea><br>
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