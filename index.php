<?php
$CurrentMenu = "m1";
$PageTitle = "Rubber Mold Company | Custom Rubber Molding Manufacturer";
$Description = "Molded Dimensions’ commitment to quality makes us the rubber molding company of choice for multiple industries. Learn more about us here.";
$Keywords = "molded dimensions, product development, product development process, part design, tooling design, process design, materials engineering, FDA, NSF, 3A compliance, polyurethane compounds, rubber molding, rubber molds, polyurethane molding, molding company, rubber molding company, polyurethane molding company, women owned business, women owned company, molded rubber, rubber parts, rubber manufacturer, rubber manufacturing, rubber components, rubber supplier, molded rubber parts, custom molded rubber, rubber molding company, rubber injection, molded rubber product";
$FullWidth = "yes";

include "header.php";
?>

<div class="site-width">
  <div class="home-boxes">
    <div class="home-box cf">
      <div class="hb-head">
        <div class="hb-image" style="background-image: url(images/spiff-rubber.jpg);"></div>
        <h2><a href="rubber-molding.php">Rubber Molding</a></h2>
      </div>
      <div class="hb-text">
        We’re proud of the technological edge and versatility we offer our customers. As an experienced rubber molding company, we’re knowledgeable in all the newest and most advanced processes. Thermoset polymers ranging from EPDM to Fluourosilicone are processed for use in custom applications using injection, compression and transfer molding technologies.
      </div>
      <a href="rubber-molding.php" class="hb-more text">Learn More</a>
    </div>

    <div class="home-box cf">
      <div class="hb-head">
        <div class="hb-image" style="background-image: url(images/spiff-poly.jpg);"></div>
        <h2><a href="polyurethane-molding.php">Polyurethane Molding</a></h2>
      </div>
      <div class="hb-text">
        Our custom formulations under the Pentathane® name offer significant advantages over other materials, including plastic, metal and rubber. Our expertise as a cast polyurethane molder allows us to make the most of this material and create parts that offer high performance and enhanced durability. Cast polyurethane mechanical components are manufactured using open cast and compression molding technologies for a wide variety of applications and industries.
      </div>
      <a href="polyurethane-molding.php" class="hb-more text">Learn More</a>
    </div>

    <div class="home-box cf">
      <div class="hb-head">
        <div class="hb-image" style="background-image: url(images/spiff-glocal.jpg);"></div>
        <h2><a href="glocalsource.php">GlocalSource</a></h2>
      </div>
      <div class="hb-text">
        This business unit focuses on providing product from worldwide rubber molding manufacturers, supported by MD's local technical expertise and project management. We partner with top custom rubber product manufacturers from around the globe. Our network of partners makes it possible for us to offer competitive part pricing in a world market with the added benefits of our logistics, inventory management, and engineering expertise.
      </div>
      <a href="glocalsource.php" class="hb-more text">Learn More</a>
    </div>
  </div>
</div>

<div class="credibility">
  <div class="site-width">
    <div class="title">some of our awards & certifications</div>
    <ul class="cred-logos">
      <li><img alt="PMA's Regulatory Compliance Self-Certification Program Logo" src="images/pma-2021-gray.png"></li>
      <li><img alt="Bsi award logo" src="images/logo-cred-bsi-01.png"></li>
      <li><img alt="Milwaukee Journal Sentinel top place to work award logo" src="images/twp5x-gray.png"></li>
      <li><img alt="Wisconsin Manufacturer of the Year Award logo" src="images/logo-cred-wmy-01.png"></li>
      <li><img src="images/logo-cred-mana.png" alt="MANA Manufacturers & Agents"></li>
    </ul>
  </div>
</div>

<div class="site-width">
  <div class="md-content">
    <p>&nbsp;</p>
    <h2>The MD Difference</h2>
    <p>We stand out among cast polyurethane and molded rubber product manufacturers because of the service-oriented approach we take with every project. We know when clients are looking for a manufacturer they can trust, they want to find a true partner who will stand by them through the entire new product design and introduction cycle. We work closely with our customers to develop better products, meet project milestones, and offer the best possible results. </p>

    <p>Since 1954, we’ve been the service provider of choice for companies across a diverse cross-section of markets. Our services as a custom rubber and cast polyurethane molding company have been called upon by the mining, food processing, material handling, small engine, industrial, and defense sectors – as well as many others. But that’s only part of the story. The knowledge and experience gained from the wide variety of projects cross-pollinates, benefiting future projects. Our diverse skills and technological advantages deliver peace of mind to your project, whatever your product needs may be.</p>

    <p>We understand that without the right people, a commitment to quality is nothing more than words on paper. That’s why at the foundation of everything we do is our goal to make Molded Dimensions a place where great people choose to work. Our people strive to do their best every day because they enjoy working here. We know that satisfied employees provide exceptional service and quality products with on-time delivery, which leads directly to satisfied clients.</p>
  </div>

  <br><br>

  <h2 class="foot-title"><a href="<?php echo $TopDir; ?>blog/category/blog/">NEWS <span>ABOUT MD</span></a></h2>
  <div id="home-news">
    <?php
    require('blog/wp-load.php');

    function NewsBox($post, $cat) {
      $TheLink = (isset($post->newsblog_link)) ? $post->newsblog_link : get_the_permalink();
      echo '<a href="'.$TheLink.'">'."\n";
        echo "<h6>".$cat."</h6>\n";
        the_title("<h3>","</h3>");
        echo fg_excerpt(28, "...");
        echo '<div class="line"></div>'."\n";
        if (isset($post->newsblog_byline)) echo "<h4>By ".$post->newsblog_byline."</h4>\n";
        echo "<h5>".get_the_date()."</h5>\n";
      echo "</a>\n";
    }

    query_posts('showposts=1&cat=223');
    while (have_posts()): the_post();
      NewsBox($post, "News");
    endwhile;

    query_posts('showposts=3&cat=222');
    while (have_posts()): the_post();
      NewsBox($post, "Blog");
    endwhile;
    ?>
  </div> <!-- /#home-news -->
</div>

<script type="application/ld+json">
  {
 	"@context": "http://schema.org",
 	"@type": "Organization",
 	"name": "Molded Dimensions",
 	"url": "https://moldeddimensions.com",
 	"logo": "https://moldeddimensions.com/images/logo.png",
 	"telephone": "(262) 284-9455",
 	"address": {
 	 "@type": "PostalAddress",
 	 "streetAddress": "701 Sunset Rd",
 	 "addressLocality": "Port Washington",
 	 "addressRegion": "WI",
 	 "postalCode": "53074",
 	 "addressCountry": {
 	 	"@type": "Country",
 	 	"name": "USA"
 	 }
  },
  "sameAs": [
 	"https://www.facebook.com/pages/Molded-Dimensions/125505580874509",
     "https://www.linkedin.com/company/molded-dimensions"
  ]
 }
 </script>

<?php include "footer.php"; ?>