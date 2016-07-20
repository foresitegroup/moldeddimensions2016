<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

$CurrentMenu = "m6";

if ( !is_single() ) :
  $PageTitle = "Blog";
  $Description = "";
  $Keywords = "";
else :
  $PageTitle = get_the_title();
endif;

include "../header.php";
?>

<script type="text/javascript">
  $(document).ready(function() { $('.m6 UL LI A').addClass("currentpage"); });
</script>