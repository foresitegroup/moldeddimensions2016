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

    <title><?php echo $PageTitle; ?></title>
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

        $('a.download').each(function(){
          $(this).prop({'href': 'download.php?f='+$(this).prop('href'), 'target': ''});
        });
      });
    </script>

    <link rel="stylesheet" href="inc/jquery.fancybox.min.css">
    <script src="inc/jquery.fancybox.min.js"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QL4CRR');</script>
    <!-- End Google Tag Manager -->

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

    <!-- Global site tag (gtag.js) - Google Ads: 479502533 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-479502533"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-479502533');
    </script>
  </head>
  <body <?php if ($CurrentMenu == "m1") { echo ' class="page-home"'; } ?>>

  <div id="notice-modal" class="site-width">
    <strong>Molded Dimensions is Essential Business: Open and Shipping Product.</strong><br>
    <br>

    The Coronavirus situation continues to change daily. Here are the updates from Molded Dimensions.<br>
    <br>

    1) <u>Employees:</u>  We are initiating work from home for positions where this is possible.  Our manufacturing employees, and other essential staff, in Wisconsin continue to report for work and production continues as normal. In addition to regular workplace sanitizing, we continue to provide ways to social distance ourselves and reduce cross-contamination between departments and facilities.<br>
    <br>

    2) <u>Raw Material Supply:</u> We continue to monitor our supply base to assure our raw material stock is available to provide uninterrupted supply for our customers.<br>
    <br>

    3) <u>Production Commitment:</u> Our manufacturing employees are considered "Essential Critical Infrastructure Workers." We do not plan to shut down manufacturing and shipping unless required to do so by governmental restrictions.<br>
    <br>

    Best regards,<br>
    Patrick Roddy<br>
    VP Sales
  </div>

  <div id="notice"><a data-fancybox data-src="#notice-modal" href="javascript:;">COVID-19 Alert: Molded Dimensions is Essential Business: Open and Shipping Product.</a></div>

  <div class="md-header">
    <div class="mobile-banner"><a href="tel:2622849455">(262) 284-9455</a></div>

    <div class="site-width">
      <div class="top-menu">
        <div class="phone">(262) 284-9455</div>
      </div>

      <div style="clear: both;"></div>

      <div class="logo-slogan">
        <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png?<?php if ($TopDir == "") echo filemtime('images/logo.png'); ?>" alt="Molded Dimensions" class="logo"></a>
      </div>

      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle"></label>
      <div class="menu"><?php include "menu.php"; ?></div>
    </div>
  </div>

  <?php if ($CurrentMenu == "m1") { ?>
    <div class="home-hero-static">
      <div class="site-width">
        <div class="cont">
          <h1>Experienced Rubber and Cast Polyurethane Molders</h1>
          <div class="text">
            <p>Since 1954, we have been the service provider of choice for companies across a diverse selection of markets for their polyurethane and rubber molding needs.</p>
            <a href="/capabilities.php" class="btn">What We Do</a>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="banner <?php echo $CurrentMenu; ?>">
      <div class="site-width">
        <h1><?php echo (isset($HeaderTitle)) ? $HeaderTitle : $PageTitle; ?></h1>
      </div>
    </div>
  <?php } ?>

  <div class="site-width main-content<?php echo " $CurrentMenu"; if (!empty($FullWidth)) echo " full-width"; ?>">
    <div class="md-content">
