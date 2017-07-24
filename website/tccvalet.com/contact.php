<?php
include "include.php";
$content = "<table><tr><td>
<h4><center><img width='250px' src='./media/bethjames.jpg' /></center>
James & Beth Smith</h4>
<h4>3 Cypress Branch Way STE 102<br />Palm Coast, FL 32164</h4>
<h4>Beth  386.627.4972</h4>
<h4>E-mail address: beth@tccvalet.com</h4>
<h4>Let us know how we can best serve you.</h4>
<h4>You can leave suggestions without sending<br />any personal or business details.</h4></td>

<td><form method='post'>";

if (isset($_POST['submit'])) {
	$message = 	"Name: " . $_POST['name'] . PHP_EOL .
				"Email: " . $_POST['email'] . PHP_EOL .
				"Comment: " . $_POST['comment'];
	$headers =  'MIME-Version: 1.0' . "\r\n"
	. 'From: TCC Comment <comment@tccvalet.com>' . "\r\n"
	. 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	if (mail('beth@tccvalet.com','Contact Form Submission from TCCValet.com',$message,$headers))
		$content .= "<center>Thanks for commenting!</center>";
	else
		$content .= "<center>Failed to send message. Please contact customer service.</center>";
}
$content .= "
<label>Name: (Optional)</label><input name='name' type='text'>
<label>Email Address: (Optional)</label><input name='email' type='text'>
<label>Comment: (Required)</label><textarea name='comment' required></textarea>
<input type='submit' name='submit' class='button'>
</form>
</td></tr></table>

<p>TCC Valet was established by James and Beth Smith in 2009. After their relocation to North East Florida they realized that a dry cleaner that offered quality work was far and few between and very difficult to find. James decided to refocus his business from consulting to a dry cleaning valet service. They come to this industry with a combined 60 years of experience and have both been formally employed at high-end dry cleaning facilities in both New York and New Jersey.</p>
<p>James and Beth have been married over 25 years and are the proud parents of 3 children. Dan, their first born, is a computer programmer and created this website. (Hi mom!) Their teenage twins, Dylan and Danielle, enjoy spending their spare time in multiple sports while attending Matanzas High School.</p>
<p>James and Beth take the hassle out of first finding a quality dry cleaner and then of dropping off and picking up your garments. Another errand is checked off your 'to-do-list'. As your personal valet, they will help keep you looking your best all the time. Using the valet service, you can be sure that the care and level of detail that is given to your garments is always at the highest quality available. You can now also drop off or pick up from our store. No matter what, you can have confidence that your garments will be processed correctly and that you will always look your best, therefore bypassing the stress that comes with not using a good dry cleaner and wondering what your garments will look like this time.</p>
";


$output =  str_replace("<a href='contact.php' class='button'>", "<a href='contact.php' class='button active'>", $output);
$output =  str_replace("{content}", $content, $output);
echo $output;
?>