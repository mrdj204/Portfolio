<?php
include "include.php";
$content = "
<div class='service'><!--
 --><a class='button infoB' href='javascript:show2(\"a\")' id='ab'><h3>Pick-Up & Delivery Service</h3></a><!--
 --><div class='serviceInfo' id='a'>
	<table width=80%><tr>
 		<td><ul><li><h3 class='left'>Save Money</h3></li>Competitive Prices!<ul></td>
 		<td><ul><li><h3 class='left'>Save Valuable Time</h3></li>We can take an errand or two off your to-do list.<ul></td>
 	</tr><tr>
 		<td><ul><li><h3 class='left'>Free Delivery!</h3></li>Weekly pick-up & delivery from your home or office!<ul></td>
 		<td><ul><li><h3 class='left'>Customer Service</h3></li>Excellence brought to you whether in person,<br />by phone, or by e-mail.<ul></td>
 	</tr></table></div><!--
 --><a class='button infoB' href='javascript:show2(\"b\")' id='bb'><h3>What is Your Time Worth?</h3></a><!--
 --><div class='serviceInfo' id='b'><p></p>
	 	<span class='qa'>Q:</span> Are you looking for a quality drycleaner to process your garments, without having to travel miles to find one?</p>
	 	<span class='qa'>A:</span> Cleaners that produce quality work are few and far in between, so we decided to implement a Pick-up and Delivery Service using one of the area's best cleaners.</p>
	 	<span class='qa'>Q:</span> Are you concerned about who is taking care of your costly wardrobe?</p>
	 	<span class='qa'>A:</span> Our customers cherish the clothing they buy and want it to stay new looking as long as possible. We work hard at making sure that the cleaners we use offer garment care service that is top-notch quality.</p>
	 	<span class='qa'>Q:</span> Are you looking to find more time to spend doing the things you love rather than time consuming chores?</p>
		<span class='qa'>A:</span> We take one or two errands off your list, which gives you more time to do what you want to do. Check out all the services we have by clicking <a href=services.php>SERVICES</a> above.</p></div><!--
 --><a class='button infoB' href='javascript:show2(\"c\")' id='cb'><h3>How it Works: Residential</h3></a><!--
 --><div class='serviceInfo' id='c'>
 		<table width='100%'><td width='67%'>
	 		<ul>
		 		<li class='fonth3'>We service residential clients twice a week.</li>
		 		<li class='fonth3'>Receive confirmation of your specific delivery days upon registration.</li>
		 		<li class='fonth3'>TCC offers a wide assortment of professional cleaning <a href='services.php'>SERVICES</a>.</li>
		 		<li class='fonth3'>We use email, text, and phone for reminders and alerts pertaining to pick-up dates, specials, billing, and customer service.</li>
		 		<li class='fonth3'>Contact Beth to get started!<br />beth@tccvalet.com or (386)627-4972</li>
	 		</ul>
 		</td><td width='33%'>
 			<img class='imgcol' src='./media/residential.jpg' />
		</td></table>
	</div><!--
 --><a class='button infoB' href='javascript:show2(\"d\")' id='db'><h3>How it Works: Businesses</h3></a><!--
 --><div class='serviceInfo' id='d'>
 		<ul>
			<li class='fonth3'>Help keep employees looking their best at all times!</li>
			<li class='fonth3'>Bring the advantages of having Pick-up & Delivery into your workplace with our FREE Program!</li>
			<li class='fonth3'>At no cost to you, we will provide all materials needed for the best possible service, \"out of the way\" pick-ups and deliveries, if preferred, and \"outstanding\" customer support.</li>
			<li class='fonth3'>We service business clients twice per week!</li>
			<li class='fonth3'>Everything is taken care of by our staff from start to finish!</li>
			<li class='fonth3'>There are no bills. All employees are charged directly!</li>
			<li class='fonth3'>We help you provide a benefit at no cost to you, that your employees will appreciate!</li>
			<li class='fonth3'>Help improve your employees productivity by taking an errand off their to-do list!</li>
			<img class='imgcol' src='./media/people.png' />
			<li class='fonth3'>We help to make sure that your employees attire makes the right impression every time!</li>
			<li class='fonth3'>Change your company image!</li>
			<li class='fonth3'>We are in and out. There are no disruptions to your employees!</li>
			<li class='fonth3'>Your employees will not be late again trying to fit in that errand before work or during their lunch hour!</li>
			<li class='fonth3'>All you have to do to get started is say Yes!</li>
			<li class='fonth3'>There is absolutely no cost, no obligation, and no long-term commitments required. We will handle the necessary steps. Within a couple days of your request, we will provide the information that your employees will need to start using the service. We personally deliver everything, so your employees can begin to take full advantage of our outstanding service.</li>
		</ul>
	</div>
</div>
";
$output = str_replace("<a href='info.php' class='button'>", "<a href='info.php' class='button active'>", $output);
$output = str_replace("<body>", "<body onload='show2(\"a\")'>", $output);
$output = str_replace("{content}", $content, $output);
echo $output;
?>