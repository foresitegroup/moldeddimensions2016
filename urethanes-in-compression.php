<?php
$CurrentMenu = "m4";
$PageTitle = "Urethanes in Compression";
$Description = "";
$Keywords = "";

include "header.php";
?>

<h1>Urethanes in Compression</h1>
Urethane elastomers have higher load bearing capacity than do conventional elastomers of comparable hardness. This permits design of smaller parts, with possible savings in weight and materials cost. Compression-deflection curves for urethane and natural rubber vulcanizates of equivalent hardness (80 durometer A) are compared in Figure 1. This figure illustrates that urethanes can be loaded beyond conventional limits for rubber. 90A urethane has sustained short-term loadings of greater than 20,000 psi and 95A urethane has been loaded to 68,000 psi without fracturing.<br>
<br>

<img class="centered-image" src="images/urethanecompfig1.png" alt=""><br>
<br>

<h2>Effect of Load Surface Conditions</h2>
When an elastomeric piece is compressed between parallel plates, the surfaces in contact with the plates tend to spread laterally, increasing the effective load bearing area. If this lateral movement of the surface is restricted, the compression-deflection behavior of the piece is changed. Restriction of lateral movement greatly stiffens the part.<br>
<br>

Figure 2 illustrates this effect quite clearly. A lubricated surface offers essentially no resistance to lateral movement. Lubrication at the metal-rubber surface may excessively strain the part because extreme deformation may occur. A clean, dry loading surface offers some resistance due to friction; if the surface is bonded to the metal plates, no lateral movement is possible and insures reproducible compression values. These differences in contact surface result in three distinct compressive stress-strain relationships for the same piece of rubber. The load bearing capability of urethane can be altered by a factor of 5 to 1 by changing the surface conditions.<br>
<br>

<img class="centered-image" src="images/urethanecompfig2.png" alt=""><br>
<br>

<h2>Effect of Shape</h2>
Shape factor is defined as the ratio of the area of one loaded surface to the total area of the unloaded surfaces which are free to bulge. Parts made from the same compound and having the same shape factor behave identically in compression, regardless of actual size or shape.<br>
<br>

Effective use of compression-deflection data is dependent on knowledge of test conditions under which the data were taken. The values presented are for normal room temperature and static or slow speed operation. Other temperatures and dynamic loadings would change these values completely. Shape factors below 0.25 may permit buckling; therefore, higher shape factors should be used.<br>
<br>

As shape factor increases, the unit load required to produce a given strain also increases. There is, however, no mathematical relationship between shape factor and compressive modulus; the relationship must be determined empirically. Figures 3 and 4 show compression-deflection curves for urethane covering a range of hardnesses and shape factors. These curves were obtained with bonded surface. The compression-deflection characteristics of a fabricated item of a particular hardness may vary up to +/-10% from the curves shown. Deviations arise primarily from inaccuracies in measuring hardness of an elastomer compound.<br>
<br>

Deformations are usually limited from 15% to 25%, which is the predictable straight line portion of the shape factor curves. Deformations above 25% impose higher stresses which induce much higher set and increase creep in the part.<br>
<br>

<img class="centered-image" src="images/urethanecompfig3.png" alt=""><br>
<br>

<img class="centered-image" src="images/urethanecompfig4.png" alt=""><br>
<br>

<h1>Use of Compression Stress-Strain Curves in Design</h1>
The following examples show how the compression stress-strain curves can be used in the design of urethane parts. Shape factor for blocks and cylinders is calculated as follows:<br>
<br>

<strong>For rectangular shaped prisms</strong><br>
Shape factor = 1w/ (2t (1+w)) where l = length, w = width, t = thickness, d = diameter, and h = height<br>
<br>

<strong>For discs and cylinders</strong><br>
Shape factor = d/ (4h)<br>
<br>

This relationship is limited to the following:<br>
1. pieces which have parallel loading faces;<br>
2. pieces whose thickness is not more than twice the smallest lateral dimension; and<br>
3. pieces whose loading surfaces are restrained from lateral movement.<br>
<br>

<strong>Example 1</strong><br>
Problem: Assume a pad 8 inches square by 1 inch thick, made of 70 durometer A. How much will the pad deflect under 1000 psi compression stress?<br>
<br>

Solution:<br>
(a) The shape factor of the piece is: One loaded surface area/ total free bulge area = (8 x 8) / ((2 x 1) x (8+8)) = 64/32 = 2<br>
<br>

(b) In figure 3 we find that the compressive stress-strain curve of a 70A durometer urethane part with a shape factor of 2 crosses the 1000 psi stress abscissa at 11% strain. Therefore, the pad will deflect 11% of one inch or .11 inch.<br>
<br>

<strong>Example 2</strong><br>
Problem: What happens if the pad thickness is doubled in Example 1?<br>
<br>

Solution:<br>
(a) Shape factor of the piece is now: (8 x 8) / ((2 x 2) x (8+8)) = 64/64 = 1<br>
<br>

(b) From figure 3, the compressive strain at 1000 psi stress for a 70 durometer A part with a shape of 1 is 25%. In this case the pad will deflect 25% of two inches or 0.50 inch. (In practice, parts made of conventional elastomers are generally designed so that compressive strain does not exceed 15%).<br>
<br>

<strong>Example 3</strong><br>
Problem: Assume a pad which is one inch square by one-half inch thick and bears a 2500 lb compressive load. The pad may not deflect more than 0.05 inches because of space limitation. What hardness of urethane vulcanizates should be specified?<br>
<br>

Solution:<br>
(a) Shape factor or the piece is: (1 x 1) / ((2 x 1/2) (1 +1)) = &frac12; = 0.5<br>
(b) Unit compressive stress is: 2500/ (1x1) = 2500 psi<br>
(c) Compressive Strain is: 0.05/0.5 x 100 = 10%<br>
(d) On scanning the compressive stress-strain curves we find in Figure 4 that vulcanizates which are 60D hard or harder will bear a compressive stress of 2500 psi with 10% or less deflection.<br>
<br>

As a general rule, the harder the elastomer, the greater its load-bearing capacity. The manner in which load-bearing properties of urethane change with hardness at various deformations is shown in figures 5 through 7.<br>
<br>

<img class="centered-image" src="images/urethanecompfig5.png" alt=""><br>
<br>

<img class="centered-image" src="images/urethanecompfig6.png" alt=""><br>
<br>

<img class="centered-image" src="images/urethanecompfig7.png" alt="">

<script type="text/javascript">
  $(document).ready(function() { $('.m4 UL LI:nth-of-type(2) A').addClass("currentpage"); });
</script>

<?php include "footer.php"; ?>