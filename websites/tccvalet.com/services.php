<?php
include "include.php";

if (isset($_GET['service']))
	$service = $_GET['service'];
if (isset($service))
	$output = str_replace("<body>", "<body onload='show(\"$service\")'>", $output);

$content = "
<div class='service'><!--
 --><a class='button serviceB' href='javascript:show(\"a\")' id='ab'><h3>Alterations</h3></a><!--
 --><a class='button serviceB' href='javascript:show(\"b\")' id='bb'><h3>Bridal Gowns</h3></a><!--
 --><div class='serviceInfo' id='a'>
		<p>You can come to our store to have your garments altered. Our clients often tell us that they think it looks perfect (when it is pinned) and our tailor still wants to make it better.</p></div><!--
 --><div class='serviceInfo' id='b'>
	 	<p>Whether your wedding gown is an Oleg Cassini, a Vera Wang, or a designer no one has heard of… The dress represents a wonderful day and should be preserved for you or for someone you want to wear it.</p>
	 	<p>The fine delicate fabrics, trim, and beaded details make a gown a real work of art. That is why we carefully clean it, and use our specialist in wedding gowns to preserve it as a special family heirloom.</p></div><!--
 --><a class='button serviceB' href='javascript:show(\"c\")' id='cb'><h3>Dry Cleaning / Ties</h3></a><!--
 --><a class='button serviceB' href='javascript:show(\"d\")' id='db'><h3>Fur / Fur Trim / Leather</h3></a><!--
 --><div class='serviceInfo' id='c'>
	 	<p>Your business wear can either make or break you. Our services can help you make a great first impression and help build your confidence.</p>
	 	<p>Showing up at work for a business meeting wearing a stained tie or haveing a crumpled dress or suit jacket just looks sloppy. That is why we pay attention to every detail, and check your garments carefully before you leave our store.</p></div><!--
 --><div class='serviceInfo' id='d'>
 		<p>We have a specialist that can care for your specialty garments. Whether you have a cashmere sweater with a fox collar, or a cape with mink insets, the garment has to be cleaned and glazed just like you would a fur coat. </p></div><!--
 --><a class='button serviceB' href='javascript:show(\"e\")' id='eb'><h3>Sheets / Wash & Fold</h3></a><!--
 --><a class='button serviceB' href='javascript:show(\"f\")' id='fb'><h3>Shirt Care</h3></a><!--
 --><div class='serviceInfo' id='e'>
	 	<p>There is nothing better than lying down on a bed with fresh crisp ironed linens on it. It makes you feel like you’re in a five star hotel in Monte Carlo. So why not do it at home?</p>
	 	<p>Our soaps and sizings are gentle and will preserve your best linens and bedding so that you’ll feel like a queen (or king) when you treat yourself to this special service</p></div><!--
 --><div class='serviceInfo' id='f'>
 		<p>We guarantee that your shirt will have all of its buttons in tact and look perfect for the next time you wear it.</p></div><!--
 --><a class='button serviceB' href='javascript:show(\"g\")' id='gb'><h3>Shoe Care</h3></a><!--
 --><a class='button serviceB' href='javascript:show(\"h\")' id='hb'><h3>And More...</h3></a><!--
 --><div class='serviceInfo' id='g'>
 		<table><tr><td><p>People often bring their shoes to the counter with their garments and ask if we can repair their shoes and shine them. We do; we have some expert shoemakers who can make them look perfect in every way. We’re virtually a “one stop shop” during your busy day.</p></td>
		<td><img class='imgcol small' src='./media/services/7.png' /></td></tr></table></div><!--
 --><div class='serviceInfo' id='h'>
 		<p>Just ask us!</p></div>
</div>
";
$output =  str_replace("<a href='services.php' class='button'>", "<a href='services.php' class='button active'>", $output);
$output =  str_replace("{content}", $content, $output);
echo $output;
?>