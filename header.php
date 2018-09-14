<?php
if (!isset($TopDir)) $TopDir = "";

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Molded Dimensions<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">
    
    <meta name="description" content="<?php if (isset($Description)) echo $Description; ?>">
    <meta name="keywords" content="<?php if (isset($Keywords)) echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">
    
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href*='.pdf").not("[href*='" + window.location.host + "']").prop('target','new');
        $(".<?php echo $CurrentMenu; ?>").addClass("current");
        $(".md-sidebar UL LI UL LI [href]").each(function() {
          if (this.href == window.location.href) { $(this).addClass("currentpage"); }
        });
      });
    </script>

    <!-- BEGIN Google Analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-38271523-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- END Google Analytics -->
  </head>
  <body>

  <div class="md-header">
    <div class="mobile-banner"><a href="<?php echo $TopDir; ?>.">Home</a></div>
    
    <div class="site-width">
      <div class="top-menu">
        <div class="phone">(262) 284-9455</div>

        <div class="links">
          <a href="<?php echo $TopDir; ?>careers.php">Careers</a> / <a href="<?php echo $TopDir; ?>contact-us.php">Contact</a> / <a href="<?php echo $TopDir; ?>rfq.php">RFQ</a>
        </div>

        <a href="https://www.facebook.com/pages/Molded-Dimensions/125505580874509" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/molded-dimensions" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="<?php echo $TopDir; ?>blog" class="social"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
      </div>

      <div style="clear: both;"></div>
      
      <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Molded Dimensions" id="logo"></a>

      <div class="slogan">
        <strong>MOLDED DIMENSIONS INC.</strong><br>

        <div>Custom Molder of Rubber and Cast Polyurethane Components.</div>
      </div>

      <form class="search" method="POST" action="<?php echo $TopDir; ?>search.php">
        <div>
          <input type="text" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>

      <div style="clear: both;"></div>
      
      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle"></label>
      <div class="menu"><?php include "menu.php"; ?></div>
    </div>
  </div>
  
  <?php if ($CurrentMenu == "m1") { ?>
  <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
  <div class="cycle-slideshow" data-cycle-speed="2000" data-cycle-timeout="5000" data-cycle-slides="> div">
    <div style="background-image: url(images/rotating1.jpg);">
      <a href="wbe-esop.php">
        <span>Women's Business Enterprise</span>
      </a>
    </div>

    <div style="background-image: url(images/rotating-pma.jpg);">
      <a href="certifications-awards.php">
        <span class="slogan-left">First to be PMA Safe &amp; Compliant</span>
      </a>
    </div>

    <div style="background-image: url(images/rotating2.jpg);">
      <a href="glocalsource.php">
        <span class="slogan-left">Global Reach in Production and Fulfillment</span>
      </a>
    </div>
    <div style="background-image: url(images/rotating3.jpg);">
      <a href="materials-engineering.php">
        <span>Engineered Quality in Every Part</span>
      </a>
    </div>
    <div style="background-image: url(images/rotating4.jpg);">
      <a href="project-management.php">
        <span class="slogan-left">Best in Class Project Management</span>
      </a>
    </div>

    <span class="cycle-pager"></span>
  </div> <!-- END cycle-slideshow -->
  <?php } else { ?>
  <div class="banner <?php echo $CurrentMenu; ?>">
    <div class="site-width">
      <h2><?php echo $PageTitle; ?></h2>
    </div>
  </div>
  <?php } ?>
  
  <div class="site-width main-content<?php echo " $CurrentMenu"; if (!empty($FullWidth)) echo " full-width"; ?>">
    <div class="md-content">
      