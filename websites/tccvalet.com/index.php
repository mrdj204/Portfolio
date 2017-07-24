<?php
include "include.php";
$content = "<table><tr><td>
	<h2>Welcome to TCC Valet!</h2>
	<h3>We offer Dry Cleaning Valet<br />Pickup & Delivery Service !</h3>
	<img class='imgcol' src='./media/van.png' />
	<h3>386-627-4972</h3></td><td>
	<h3>Check out our new store!<br />Open 6am to 6pm (M-F) and 8am to 2pm (Sat)</h3>
	<img class='imgcol' src='./media/storefront.png' />
	<h3>3 Cypress Branch Way STE 102, Palm Coast, FL</h3>
</td></tr></table>

<h2>We come to you twice a week at either your business or residence</h2>
<h2>The Best Drycleaners with Pickup & Delivery Service<br>Available within Flagler & Volusia Counties</h2>
<h2>Quality & Service are our foremost concerns</h2>

<div class='servicebar'><!--
--><div class='serviceDiv'><a href='services.php?service=c'><img class='imgservice' src='./media/services/1.png' /><br />Men's Drycleaning</a></div><!--
--><div class='serviceDiv'><a href='services.php?service=f'><img class='imgservice' src='./media/services/4.png' /><br />Shirt Care</a></div><!--
--><div class='serviceDiv'><a href='services.php?service=c'><img class='imgservice' src='./media/services/3.png' /><br />Women's Drycleaning</a></div><!--
--><div class='serviceDiv'><a href='services.php?service=b'><img class='imgservice' src='./media/services/2.png' /><br />Bridal Gowns</a></div><!--
--><div class='serviceDiv'><a href='services.php?service=e'><img class='imgservice' src='./media/services/5.png' /><br />Wash & Fold</a></div><!--
--><div class='serviceDiv' style='padding: 20px 80px;'><a href='services.php?service=c'><img class='imgservice' src='./media/services/6.png' /><br />Ties</a></div><!--
--><div class='serviceDiv'><a href='services.php?service=g'><img class='imgservice' src='./media/services/8.png' /><br />Shoe Care</a></div><!--
-->
</div>";
$output =  str_replace("<a href='./' class='button'>", "<a href='./' class='button active'>", $output);
$output =  str_replace("{content}", $content, $output);
echo $output;
?>