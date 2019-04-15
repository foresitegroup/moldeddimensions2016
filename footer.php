    </div>
    
    <div class="md-sidebar">
      <?php include "menu.php"; ?>
    </div>
  </div>

  <div class="site-width prefooter">
    <h2 class="foot-title"><a href="<?php echo $TopDir; ?>part-examples.php">A PEEK AT <span>OUR PARTS</span></a></h2>

    <div class="one-fourth">
      <div class="pf-image" style="background-image: url(<?php echo $TopDir; ?>images/part-examples/wipers.jpg);"></div>
      <a href="<?php echo $TopDir; ?>part-example-wipers.php">Pentathane Applications - Wipers</a>
      Wiper used to material handling in food processing equipment. This material is both FDA approvable and abrasion resistant for durability.
    </div>

    <div class="one-fourth">
      <div class="pf-image" style="background-image: url(<?php echo $TopDir; ?>images/part-examples/wheels.jpg);"></div>
      <a href="<?php echo $TopDir; ?>part-example-wheels.php">Pentathane Applications - Wheels</a>
      Pentathane&reg; chemically bonded directly onto precision sealed bearing molded to tight concentricity specifications.
    </div>

    <div class="one-fourth">
      <div class="pf-image" style="background-image: url(<?php echo $TopDir; ?>images/part-examples/hose.jpg);"></div>
      <a href="<?php echo $TopDir; ?>part-example-hose.php">Elastomer Applications - Hose</a>
      Hose configured for limited space in marine engine application.
    </div>

    <div class="one-fourth">
      <div class="pf-image" style="background-image: url(<?php echo $TopDir; ?>images/part-examples/tube.jpg);"></div>
      <a href="<?php echo $TopDir; ?>part-example-tube.php">Elastomer Applications - Tube</a>
      Oil resistant molded tube used on combustion engine.
    </div>
  </div>
  
  <?php if ($CurrentMenu == "m1") { ?>
  <div class="site-width prefooter">
    <h2 class="foot-title"><a href="our-company.php">LEARN MORE <span>ABOUT MD</span></a></h2>

    <a href="history.php" class="homemenu">since 1954</a>
    <a href="product-development.php" class="homemenu">engineering mindset</a>
    <a href="mission-strategy.php" class="homemenu">exceptional workplace</a>
    <a href="glocalsource.php" class="homemenu">global reach</a>
    <a href="industries-served.php" class="homemenu">industries served</a>
  </div>
  <?php } ?>

  <div class="md-footer">
    <div class="site-width">
      <div class="footer-left">
        <h3>MOLDED DIMENSIONS, LLC Engineered Elastomer Solutions to Help You Win.</h3>

        <div class="footer-menu"><?php include "menu.php"; ?></div>
      </div>

      <div class="footer-right cf">
        <div class="fr-left">
          <form class="search" method="POST" action="<?php echo $TopDir; ?>search.php">
            <div>
              <input type="text" name="search" placeholder="Search ...">
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>

          <a href="<?php echo $TopDir; ?>contact-us.php" class="rc-button">Email Us</a>
          <a href="<?php echo $TopDir; ?>rfq.php" class="rc-button">Submit RFQ</a>
          <a href="<?php echo $TopDir; ?>rmi.php" class="rc-button">Newsletter Signup</a>
        </div>
        
        <div class="fr-right">
          <h4>DOWNLOAD</h4>
          <ul class="dl">
            <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="<?php echo $TopDir; ?>pdf/MDI_brochure.pdf?<?php echo filemtime("pdf/MDI_brochure.pdf"); ?>">MD Brochure</a></li>
            <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="<?php echo $TopDir; ?>pdf/ISO_certificate.pdf?<?php echo filemtime("pdf/ISO_certificate.pdf"); ?>">Certified ISO 9001:2015</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    
  <div class="copyright">
    <div class="site-width">
      Copyright &copy; <?php echo date("Y"); ?> Molded Dimensions, LLC <span>|</span> All Rights Reserved <span class="midbreak">|</span> 701 W Sunset Rd, Port Washington, WI 53074 <span>|</span> (262) 284-9455

      <div class="social">
        SOCIAL LINKS
        <a href="https://www.facebook.com/pages/Molded-Dimensions/125505580874509"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/molded-dimensions"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="<?php echo $TopDir; ?>blog"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <!-- BEGIN WebTrax -->
  <script type="text/javascript">
    document.write(unescape("%3Cscript src='" + document.location.protocol + "//www.webtraxs.com/trxscript.php' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
    _trxid = "moldeddimensions";
    webTraxs();
  </script>
  <noscript><img src="http://www.webtraxs.com/webtraxs.php?id=moldeddimensions&st=img" alt=""></noscript>
  <!-- END WebTrax -->
    
  </body>
</html>